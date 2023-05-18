<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use illuminate\Support\Facades\Auth;
use App\Models\Pops;

class PopsController extends Controller
{

    public function index()
    {   
        return view('ace');
    }

    public function store(Request $request)
    {
        // dd($request->hasfile());
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
        $pop->user_id = Auth::user()->id;
        $pop->tweet = $request->input('tweet');
        if ($fileName) {
            $pop->file = $path . $fileName;
            $pop->is_video = $extension === 'mp4' ? true : false;
            $file->storeAs($path, $fileName, 'public');
        }

        // $pop->name = 'Mokammel Hossain Tanvir';
        // $pop->handle = '@mokammeltanvir';
        // $pop->image = 'https://pbs.twimg.com/profile_images/1458760157945491460/mT93gmJh_400x400.jpg';
        // $pop->comments = rand(5, 500);
        // $pop->repops = rand(5, 500);
        // $pop->likes = rand(5, 500);
        // $pop->analytics = rand(5, 500);
        $pop->save();
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pop = Pops::find($id);

        if (!is_null($pop->file) && file_exists(public_path() . $pop->file)) {
            unlink(public_path() . $pop->file);
        }

        $pop->delete();

        return redirect('dashboard');
    }
}
