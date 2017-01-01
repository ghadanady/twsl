<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\TranslationLocale;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $slidesUploadDestination = "slides";
    protected $iconsUploadDestination = "icons";
    protected $boxesUploadDestination = "boxes";

    /**
    * Render the home page
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function getIndex(){
        return view('admin.pages.home.index');
    }

    public function getChoose(Request $request){
        $v = validator($request->all(),[
            'locale' => 'required',
            'page' => 'required',
        ],
        [
            'locale.required' => db_trans('validation.required', ['title' => trans('admin_global.locales_header') ]),
            'page.required' => db_trans('validation.required', ['title' => trans('admin_global.sections_header') ]),
        ]);

        if($v->fails()){
            return redirect()->route('admin.home.index')->withErrors($v);
        }

        if(!($locale = TranslationLocale::find($request->locale))){
            return redirect()->route('admin.home.index')->withWarning(trans('admin_global.locale_not_found'));
        }

        if(!(in_array($request->page,['slider','general']))){
            return redirect()->route('admin.home.index')->withWarning(trans('admin_global.page_not_found'));
        }

        switch ($request->page) {
            case 'slider':
            return $this->renderSliderPage($locale->name);
            case 'general':
            return $this->renderGeneralPage($locale->name);
        }

    }

    /**
    * [renderGeneralPage description]
    */
    protected function renderGeneralPage($locale)
    {
        $translations = [
            'box1_header' => db_trans("{$locale}.home.smart_box_header"),
            'box1_content' => db_trans("{$locale}.home.smart_box_content"),
            'box2_header' => db_trans("{$locale}.home.wefix_box_header"),
            'box2_content' => db_trans("{$locale}.home.wefix_box_content"),
            'box3_header' => db_trans("{$locale}.home.business_box_header"),
            'box3_content' => db_trans("{$locale}.home.business_box_content"),
            'video_link' => db_trans("{$locale}.home.video_link"),
            'section1_header' => db_trans("{$locale}.home.about_section_header"),
            'section1_content' => db_trans("{$locale}.home.about_section_content"),
            'section2_header' => db_trans("{$locale}.home.goal_section_header"),
            'section2_content' => db_trans("{$locale}.home.goal_section_content"),
            'section3_header' => db_trans("{$locale}.home.services_section_header"),
            'section3_content' => db_trans("{$locale}.home.services_section_content"),
            'icon1_header' => db_trans("{$locale}.home.first_slogan_header"),
            'icon1_content' => db_trans("{$locale}.home.first_slogan_content"),
            'icon2_header' => db_trans("{$locale}.home.second_slogan_header"),
            'icon2_content' => db_trans("{$locale}.home.second_slogan_content"),
            'icon3_header' => db_trans("{$locale}.home.third_slogan_header"),
            'icon3_content' => db_trans("{$locale}.home.third_slogan_content"),
            'section4_header' => db_trans("{$locale}.home.our_services_header"),
            'section4_content' => db_trans("{$locale}.home.our_services_content"),
            'list1_content' => db_trans("{$locale}.home.list_services"),
            'section5_header' => db_trans("{$locale}.home.facilities_section_header"),
            'section5_content' => db_trans("{$locale}.home.facilities_section_content"),
            'section6_header' => db_trans("{$locale}.footer.customer_service_header"),
            'section6_content' => db_trans("{$locale}.footer.customer_service_content"),
            'list2_header' => db_trans("{$locale}.home.list_technical_header"),
            'list2_content' => db_trans("{$locale}.home.list_technical_content"),
            'list3_header' => db_trans("{$locale}.home.list_management_header"),
            'list3_content' => db_trans("{$locale}.home.list_management_content"),
            'list4_header' => db_trans("{$locale}.home.list_environmental_header"),
            'list4_content' => db_trans("{$locale}.home.list_environmental_content"),
        ];

        return view('admin.pages.home.general',compact('translations','locale'));
    }


    /**
    * [renderSliderPage description]
    */
    protected function renderSliderPage($locale)
    {
        $translations = [
            'slide_one_txt_one' => db_trans("{$locale}.slider.slide_one_layer_one"),
            'slide_one_txt_two' => db_trans("{$locale}.slider.slide_one_layer_two"),
            'slide_one_txt_three' => db_trans("{$locale}.slider.slide_one_layer_three"),
            'slide_two_txt_one' => db_trans("{$locale}.slider.slide_two_layer_one"),
            'slide_two_txt_two' => db_trans("{$locale}.slider.slide_two_layer_two"),
            'slide_two_btn_name' => db_trans("{$locale}.slider.slide_two_btn_name"),
            'slide_two_btn_action' => db_trans("{$locale}.slider.slide_two_btn_action"),
            'slider_footer_txt' => db_trans("{$locale}.slider.slider_footer_content"),
            'slider_footer_btn_name' => db_trans("{$locale}.slider.slider_footer_btn_name"),
            'slider_footer_btn_action' => db_trans("{$locale}.slider.slider_footer_btn_action"),
        ];

        return view('admin.pages.home.slider',compact('translations','locale'));
    }


    public function postEdit($page,$locale,Request $request)
    {
        if(!TranslationLocale::where('name',$locale)->first()){
            return back()->withWarning(trans('admin_global.locale_not_found'));
        }

        if(!(in_array($page,['slider','general']))){
            return back()->withWarning(trans('admin_global.page_not_found'));
        }

        switch ($page) {
            case 'slider':
            return $this->editSliderPage($locale,$request);
            case 'general':
            return $this->editGeneralPage($locale,$request);
        }

    }

    /**
    * [renderGeneralPage description]
    */
    protected function editGeneralPage($locale,Request $request)
    {

        $v = validator($request->all(),[
            'box1_img' => 'file|image|mimes:jpeg,jpg,png,gif',
            'box2_img' => 'file|image|mimes:jpeg,jpg,png,gif',
            'box3_img' => 'file|image|mimes:jpeg,jpg,png,gif',
            'icon1_img' => 'file|image|mimes:jpeg,jpg,png,gif',
            'icon2_img' => 'file|image|mimes:jpeg,jpg,png,gif',
            'icon3_img' => 'file|image|mimes:jpeg,jpg,png,gif',
            'box1_header' => 'required',
            'box1_content' => 'required',
            'box2_header' => 'required',
            'box2_content' => 'required',
            'box3_header' => 'required',
            'box3_content' => 'required',
            'video_link' => 'required',
            'section1_header' => 'required',
            'section1_content' => 'required',
            'section2_header' => 'required',
            'section2_content' => 'required',
            'section3_header' => 'required',
            'icon1_header' => 'required',
            'section3_content' => 'required',
            'icon1_content' => 'required',
            'icon2_header' => 'required',
            'icon2_content' => 'required',
            'icon3_header' => 'required',
            'icon3_content' => 'required',
            'section4_header' => 'required',
            'section4_content' => 'required',
            'list1_content.*' => 'required',
            'section5_header' => 'required',
            'section5_content' => 'required',
            'section6_header' => 'required',
            'section6_content' => 'required',
            'list2_header' => 'required',
            'list2_content.*' => 'required',
            'list3_header' => 'required',
            'list3_content.*' => 'required',
            'list4_header' => 'required',
            'list4_content.*' => 'required',
        ],
        [
            'box1_header.required' => trans('admin_global.all_missing'),
            'box1_content.required' => trans('admin_global.all_missing'),
            'box2_header.required' => trans('admin_global.all_missing'),
            'box2_content.required' => trans('admin_global.all_missing'),
            'box3_header.required' => trans('admin_global.all_missing'),
            'box3_content.required' => trans('admin_global.all_missing'),
            'video_link.required' => trans('admin_global.all_missing'),
            'section1_header.required' => trans('admin_global.all_missing'),
            'section1_content.required' => trans('admin_global.all_missing'),
            'section2_header.required' => trans('admin_global.all_missing'),
            'section2_content.required' => trans('admin_global.all_missing'),
            'section3_header.required' => trans('admin_global.all_missing'),
            'section3_content.required' => trans('admin_global.all_missing'),
            'icon1_header.required' => trans('admin_global.all_missing'),
            'icon1_content.required' => trans('admin_global.all_missing'),
            'icon2_header.required' => trans('admin_global.all_missing'),
            'icon2_content.required' => trans('admin_global.all_missing'),
            'icon3_header.required' => trans('admin_global.all_missing'),
            'icon3_content.required' => trans('admin_global.all_missing'),
            'section4_header.required' => trans('admin_global.all_missing'),
            'section4_content.required' => trans('admin_global.all_missing'),
            'list1_content.*.required' => trans('admin_global.all_missing'),
            'section5_header.required' => trans('admin_global.all_missing'),
            'section5_content.required' => trans('admin_global.all_missing'),
            'section6_header.required' => trans('admin_global.all_missing'),
            'section6_content.required' => trans('admin_global.all_missing'),
            'list2_header.required' => trans('admin_global.all_missing'),
            'list2_content.*.required' => trans('admin_global.all_missing'),
            'list3_header.required' => trans('admin_global.all_missing'),
            'list3_content.*.required' => trans('admin_global.all_missing'),
            'list4_header.required' => trans('admin_global.all_missing'),
            'list4_content.*.required' => trans('admin_global.all_missing'),
        ]);

        if($v->fails()){
            return back()->withErrors($v);
        }

        if($request->hasFile('box1_img') && $request->box1_img->isValid()){
            $stored_path = explode('/', $request->box1_img->store("images/$this->boxesUploadDestination"));
            update_image('home.smart_section_header',$this->boxesUploadDestination,end($stored_path));
        }

        if($request->hasFile('box2_img') && $request->box2_img->isValid()){
            $stored_path = explode('/', $request->box2_img->store("images/$this->boxesUploadDestination"));
            update_image('home.wefix_section_header',$this->boxesUploadDestination,end($stored_path));
        }

        if($request->hasFile('box3_img') && $request->box3_img->isValid()){
            $stored_path = explode('/', $request->box3_img->store("images/$this->boxesUploadDestination"));
            update_image('home.business_section_header',$this->boxesUploadDestination,end($stored_path));
        }
        if($request->hasFile('icon1_img') && $request->icon1_img->isValid()){
            $stored_path = explode('/', $request->icon1_img->store("images/$this->iconsUploadDestination"));
            update_image('home.first_slogan_header',$this->iconsUploadDestination,end($stored_path));
        }

        if($request->hasFile('icon2_img') && $request->box2_img->isValid()){
            $stored_path = explode('/', $request->icon2_img->store("images/$this->iconsUploadDestination"));
            update_image('home.second_slogan_header',$this->iconsUploadDestination,end($stored_path));
        }

        if($request->hasFile('icon3_img') && $request->icon3_img->isValid()){
            $stored_path = explode('/', $request->icon3_img->store("images/$this->iconsUploadDestination"));
            update_image('home.third_slogan_header',$this->iconsUploadDestination,end($stored_path));
        }

        db_update_trans("{$locale}.home.smart_box_header",$request->box1_header);
        db_update_trans("{$locale}.home.smart_box_content",$request->box1_content);
        db_update_trans("{$locale}.home.wefix_box_header",$request->box2_header);
        db_update_trans("{$locale}.home.wefix_box_content",$request->box2_content);
        db_update_trans("{$locale}.home.business_box_header",$request->box3_header);
        db_update_trans("{$locale}.home.business_box_content",$request->box3_content);
        db_update_trans("{$locale}.home.video_link",$request->video_link);
        db_update_trans("{$locale}.home.about_section_header",$request->section1_header);
        db_update_trans("{$locale}.home.about_section_content",$request->section1_content);
        db_update_trans("{$locale}.home.goal_section_header",$request->section2_header);
        db_update_trans("{$locale}.home.goal_section_content",$request->section2_content);
        db_update_trans("{$locale}.home.services_section_header",$request->section3_header);
        db_update_trans("{$locale}.home.services_section_content",$request->icon1_header);
        db_update_trans("{$locale}.home.first_slogan_header",$request->icon1_content);
        db_update_trans("{$locale}.home.first_slogan_content",$request->icon1_content);
        db_update_trans("{$locale}.home.second_slogan_header",$request->icon2_header);
        db_update_trans("{$locale}.home.second_slogan_content",$request->icon2_content);
        db_update_trans("{$locale}.home.third_slogan_header",$request->icon3_header);
        db_update_trans("{$locale}.home.third_slogan_content",$request->icon3_content);
        db_update_trans("{$locale}.home.our_services_header",$request->section4_header);
        db_update_trans("{$locale}.home.our_services_content",$request->section4_content);
        db_update_trans("{$locale}.home.list_services",$request->list1_content);
        db_update_trans("{$locale}.home.facilities_section_header",$request->section5_header);
        db_update_trans("{$locale}.home.facilities_section_content",$request->section5_content);
        db_update_trans("{$locale}.footer.customer_service_header",$request->section6_header);
        db_update_trans("{$locale}.footer.customer_service_content",$request->section6_content);
        db_update_trans("{$locale}.home.list_technical_header",$request->list2_header);
        db_update_trans("{$locale}.home.list_technical_content",$request->list2_content);
        db_update_trans("{$locale}.home.list_management_header",$request->list3_header);
        db_update_trans("{$locale}.home.list_management_content",$request->list3_content);
        db_update_trans("{$locale}.home.list_environmental_header",$request->list4_header);
        db_update_trans("{$locale}.home.list_environmental_content",$request->list4_content);


        return back()->withSuccess(trans('admin_global.translation_success_updated'));
    }


    /**
    * [renderSliderPage description]
    */
    protected function editSliderPage($locale,Request $request)
    {
        $v = validator($request->all(),[
            'slide_img.*' => 'file|image|mimes:jpeg,jpg,png,gif',
            'slide_one_txt_one' => 'required',
            'slide_one_txt_two' => 'required',
            'slide_one_txt_three' => 'required',
            'slide_two_txt_one' => 'required',
            'slide_two_txt_two' => 'required',
            'slide_two_btn_name' => 'required',
            'slide_two_btn_action' => 'required',
            'slider_footer_txt' => 'required',
            'slider_footer_btn_name' => 'required',
            'slider_footer_btn_action' => 'required',
        ],
        [
            'slide_one_txt_one.required' =>trans('admin_global.all_missing'),
            'slide_one_txt_two.required' =>trans('admin_global.all_missing'),
            'slide_one_txt_three.required' =>trans('admin_global.all_missing'),
            'slide_two_txt_one.required' =>trans('admin_global.all_missing'),
            'slide_two_txt_two.required' => trans('admin_global.all_missing'),
            'slide_two_btn_name.required' =>trans('admin_global.all_missing'),
            'slide_two_btn_action.required' => trans('admin_global.all_missing'),
            'slider_footer_txt.required' => trans('admin_global.all_missing'),
            'slider_footer_btn_name.required' => trans('admin_global.all_missing'),
            'slider_footer_btn_action.required' => trans('admin_global.all_missing'),
            'section_header.required' => trans('admin_global.all_missing'),
            'section_content.required' => trans('admin_global.all_missing'),
            'box_header.required' => trans('admin_global.all_missing'),
            'box_content.required' => trans('admin_global.all_missing'),
        ]);

        if($v->fails()){
            return back()->withErrors($v);
        }

        if($request->hasFile('slide_img') && $request->slide_img->isValid()){
            $stored_path = explode('/', $path = $request->slide1_img->store("images/$this->slidesUploadDestination"));
            update_image('slider.slide_one_layer_one',$this->slidesUploadDestination,end($stored_path));
        }

        if($request->hasFile('slide2_img') && $request->slide2_img->isValid()){
            $stored_path = explode('/', $request->slide2_img->store("images/$this->slidesUploadDestination"));
            update_image('slider.slide_two_layer_one',$this->slidesUploadDestination,end($stored_path));
        }

        db_update_trans("{$locale}.slider.slide_one_layer_one",$request->slide_one_txt_one);
        db_update_trans("{$locale}.slider.slide_one_layer_two",$request->slide_one_txt_two);
        db_update_trans("{$locale}.slider.slide_one_layer_three",$request->slide_one_txt_three);
        db_update_trans("{$locale}.slider.slide_two_layer_one",$request->slide_two_txt_one);
        db_update_trans("{$locale}.slider.slide_two_layer_two",$request->slide_two_txt_two);
        db_update_trans("{$locale}.slider.slide_two_btn_name",$request->slide_two_btn_name);
        db_update_trans("{$locale}.slider.slide_two_btn_action",$request->slide_two_btn_action);
        db_update_trans("{$locale}.slider.slider_footer_content",$request->slider_footer_txt);
        db_update_trans("{$locale}.slider.slider_footer_btn_name",$request->slider_footer_btn_name);
        db_update_trans("{$locale}.slider.slider_footer_btn_action",$request->slider_footer_btn_action);

        return back()->withSuccess(trans('admin_global.translation_success_updated'));

    }

}
