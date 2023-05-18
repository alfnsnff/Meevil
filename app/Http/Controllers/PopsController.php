<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Pops;

class PopsController extends Controller
{

    public function index()
    {   
        return view('ace');
    }

    public function addComments()
    {

    }


    public function addFavorites($id)
    {
        // Pops::instance('Favorites')->add($pop_id)->associate('App\Models\Pops');
        $pop = Pops::find($id);
        $pop->is_fav = 'true';
        $pop->save();
        return redirect()->back();
    }
    public function delFavorites($id)
    {
        // Pops::instance('Favorites')->add($pop_id)->associate('App\Models\Pops');
        $pop = Pops::find($id);
        $pop->is_fav = 'false';
        $pop->save();
        return redirect()->back();
    }

    public function store(Request $request)
    {
        // dd($request->hasfile());
        $user = Auth::user();
        $file = null;
        $extension = null;
        $fileName = null;
        $path = '';

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $request->validate([ 'file' => 'required|mimes:jpg,jpeg,png,mp4' ]);
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $extension === 'mp4' ? $path = '/videos/' : $path = '/pics/';
        }

        $pop = new Pops;

        $pop->user_id = $user->id;
        $pop->tweet = $request->input('tweet');

        if ($fileName) {
            $pop->file = $path . $fileName;
            $pop->is_video = $extension === 'mp4' ? true : false;
            $file->storeAs($path, $fileName, 'public');
        }

        $pop->save();

        $user->pops += 1;
        $user->save();

        return redirect('/dashboard');
    }


    public function destroy($id)
    {
        $user = Auth::user();
        $pop = Pops::find($id);

        if (!is_null($pop->file) && file_exists(public_path() . $pop->file)) {
            unlink(public_path() . $pop->file);
        }

        $pop->delete();

        $user->pops -= 1;
        $user->save();

        return redirect('dashboard');
    }
}
