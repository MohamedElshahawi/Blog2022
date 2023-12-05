<?php
 
namespace App\View\Composers;
 
use Illuminate\View\View;
use App\Models\Setting;


class MainSideBarComposer
{
  
    private $setting;




    public function __construct(Setting $setting) 
    {
        $this->setting = $setting;


    }
 
 
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('setting', $this->setting->all());

    }
}