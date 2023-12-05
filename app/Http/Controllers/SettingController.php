<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Contact;
use App\Models\About;



class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::all();
        $contact = Contact::all();

        return view('admin.setting.index', compact('setting', 'contact'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting, $id)
    {
        // $setting = Setting::all()->where('id')->firstOrFail();
        $setting = Setting::where('id', $id)->firstOrFail();



        return view('admin.setting.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'logo' => 'required|mimes:jpeg,jpg,png,gif|max:3000',
            'email' => 'required',
            'maintenance_mode' => 'required'
        ]);

        $logo = $request->logo;
        $newLogo = time() . $logo->getClientOriginalName();
        $logo->move(public_path('logo'), $newLogo);



        $setting = Setting::find($id);
        $setting->title = $request->title;
        $setting->logo = 'logo/' . $newLogo;
        $setting->email = $request->email;
        $setting->maintenance_mode = $request->maintenance_mode;
        $setting->save();

        return redirect()->route('setting');
    }

    public function getContact()
    {
        $contact = Contact::where('id', 1)->firstOrFail();

        return view('admin.setting.adContact', compact('contact'));
    }



    public function updateContact(Request $request, $id)
    {
        $request->validate([
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'website' => 'required'
        ]);

        $contact = Contact::find($id);
        $contact->address = $request->address;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->website = $request->website;
        $contact->save();

        return redirect()->back();
    }



    public function getAbout()
    {
        $about = About::where('id', 1)->firstOrFail();

        return view('admin.setting.adAbout' , compact('about'));
    }

    public function updateAbout(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'subject' => 'required',
            'photo' => 'required|mimes:jpeg,jpg,png,gif|max:3000'
        ]);


        $photo = $request->photo;
        $newPhoto = time() . $photo->getClientOriginalName();
        $photo->move(public_path('photo'), $newPhoto);


        $about = About::find($id);
        $about->name = $request->name;
        $about->title = $request->title;
        $about->subject = $request->subject;
        $about->photo = 'photo/' . $newPhoto;
        $about->save();

        return redirect()->back();
    }


}
