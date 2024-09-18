<?php

namespace App\Http\Controllers;

use App\Accreditation;
use App\Blog;
use App\Client;
use App\ClientCategory;
use App\CoverageCity;
use App\Message;
use App\News;
use App\Page;
use App\Plan;
use App\Poster;
use App\Presentation;
use App\Project;
use App\ProjectBlockApartment;
use App\Service;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class PageController extends Controller
{
    function index(Request $request)
    {
        $segments = explode('/',$request->slug);
        foreach ($segments as $key => $value) {
            if($key == 0){
                $Page = Page::where('slug', $value)->where('top_page',null)->first();
            }else{
                $Page = $Page->pages()->where('slug',$value)->first();
            }
            if (empty($Page)) abort(404);
        }
        // return $Page;
        if (empty($Page)) abort(404);
        
        
        SEOTools::setTitle($Page->meta_title ?? $Page->title);
        SEOTools::setDescription($Page->meta_desc);
        SEOTools::setCanonical(url()->full());
        SEOMeta::addKeyword(explode(',', $Page->meta_tags));
        SEOTools::opengraph()->setTitle(SEOTools::getTitle());
        SEOTools::opengraph()->setUrl(url()->full());
        SEOTools::opengraph()->addImage(url(asset($Page->image)));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::opengraph()->addProperty('locale', 'tr');
        SEOTools::twitter()->setTitle(SEOTools::getTitle());
        SEOTools::jsonLd()->setTitle(SEOTools::getTitle());
        SEOTools::jsonLd()->addImage(url(asset($Page->image)));
        
        return view("pages.template", compact("Page"));
    }
    
    function service(Request $request)
    {
        $segments = explode('/',$request->slug);
        foreach ($segments as $key => $value) {
            if($key == 0){
                $Page = Service::where('slug', $value)->where('service_id',null)->first();
            }else{
                $Page = $Page->child()->where('slug',$value)->first();
            }
            if (empty($Page)) abort(404);
        }
        if (empty($Page)) abort(404);
        $Meta = Page::where('slug', 'hizmetlerimiz')->first();
        $Route = 'service';
        
        SEOTools::setTitle($Page->meta_title ?? $Page->title);
        SEOTools::setDescription($Page->meta_desc);
        SEOMeta::addKeyword(explode(',', $Page->meta_tags));
        SEOTools::setCanonical(url()->full());
        SEOTools::opengraph()->setTitle(SEOTools::getTitle());
        SEOTools::opengraph()->setUrl(url()->full());
        if($Page->image != null){
            SEOTools::opengraph()->addImage(url(asset($Page->image)));
        }
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::opengraph()->addProperty('locale', 'tr');
        SEOTools::twitter()->setTitle(SEOTools::getTitle());
        SEOTools::jsonLd()->setTitle(SEOTools::getTitle());
        if($Page->image != null){
            SEOTools::jsonLd()->addImage(url(asset($Page->image)));
        }
        
        return view('details.service-details',compact('Page','Meta','Route'));
    }
    
    function client_categories(Request $request){
        $Meta = Page::where('slug', 'referanslar')->first();
        if($request->slug == 'hepsi'){
            $Page = (object)[
                'meta_title' => "Bütün OSGB Referansları",
                "meta_desc" => $Meta->meta_desc,
                "meta_tags" => $Meta->meta_tags,
                "image" => $Meta->image,
                "title" => 'Bütün OSGB Referanslarımız',
                "hero" => 'Düzenli olarak işyeri hekimi ve iş güvenliği uzmanı hizmeti verdiğimiz firmaları bu sayfada bulabilirsiniz.',
                "slug" => 'hepsi',
            ];
            $List = Client::order()->get();
            if (empty($List)) abort(404);
        }else{
            $Page = ClientCategory::where('slug',$request->slug)->first();
            if (empty($Page)) abort(404);
            $List = $Page->data()->order()->get();
        }
        $Route = 'client-categories';
        
        
        SEOTools::setTitle($Page->meta_title ?? $Page->title);
        SEOTools::setDescription($Page->meta_desc);
        SEOMeta::addKeyword(explode(',', $Page->meta_tags));
        SEOTools::setCanonical(url()->full());
        SEOTools::opengraph()->setTitle(SEOTools::getTitle());
        SEOTools::opengraph()->setUrl(url()->full());
        if($Page->image != null){
            SEOTools::opengraph()->addImage(url(asset($Page->image)));
        }
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::opengraph()->addProperty('locale', 'tr');
        SEOTools::twitter()->setTitle(SEOTools::getTitle());
        SEOTools::jsonLd()->setTitle(SEOTools::getTitle());
        if($Page->image != null){
            SEOTools::jsonLd()->addImage(url(asset($Page->image)));
        }
        
        return view('details.client-category-details',compact('Page','Meta','Route','List'));
    }
    
    function news(Request $request){
        $Meta = Page::where('slug', 'basinda-biz')->first();
        
        $Page = News::where('slug',$request->slug)->first();
        if (empty($Page)) abort(404);
        $Route = 'news';
        
        
        SEOTools::setTitle($Page->meta_title ?? $Page->title);
        SEOTools::setDescription($Page->meta_desc);
        SEOMeta::addKeyword(explode(',', $Page->meta_tags));
        SEOTools::setCanonical(url()->full());
        SEOTools::opengraph()->setTitle(SEOTools::getTitle());
        SEOTools::opengraph()->setUrl(url()->full());
        if($Page->image != null){
            SEOTools::opengraph()->addImage(url(asset($Page->image)));
        }
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::opengraph()->addProperty('locale', 'tr');
        SEOTools::twitter()->setTitle(SEOTools::getTitle());
        SEOTools::jsonLd()->setTitle(SEOTools::getTitle());
        if($Page->image != null){
            SEOTools::jsonLd()->addImage(url(asset($Page->image)));
        }
        
        return view('details.news-details',compact('Page','Meta', 'Route'));
    }
    
    function accreditation(Request $request){
        $Meta = Page::where('slug', 'akreditasyonlarimiz')->first();
        
        $Page = Accreditation::where('slug',$request->slug)->first();
        if (empty($Page)) abort(404);
        $Route = 'accreditation';
        
        
        SEOTools::setTitle($Page->meta_title ?? $Page->title);
        SEOTools::setDescription($Page->meta_desc);
        SEOMeta::addKeyword(explode(',', $Page->meta_tags));
        SEOTools::setCanonical(url()->full());
        SEOTools::opengraph()->setTitle(SEOTools::getTitle());
        SEOTools::opengraph()->setUrl(url()->full());
        if($Page->image != null){
            SEOTools::opengraph()->addImage(url(asset($Page->image)));
        }
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::opengraph()->addProperty('locale', 'tr');
        SEOTools::twitter()->setTitle(SEOTools::getTitle());
        SEOTools::jsonLd()->setTitle(SEOTools::getTitle());
        if($Page->image != null){
            SEOTools::jsonLd()->addImage(url(asset($Page->image)));
        }
        
        return view('details.accreditation-details',compact('Page','Meta', 'Route'));
    }
    
    function posters(Request $request){
        $Meta = Page::where('slug', 'afis')->first();

        $Page = Poster::where('slug',$request->slug)->first();
        if (empty($Page)) abort(404);
        $Route = 'posters';
        
        
        SEOTools::setTitle($Page->meta_title ?? $Page->title);
        SEOTools::setDescription($Page->meta_desc);
        SEOMeta::addKeyword(explode(',', $Page->meta_tags));
        SEOTools::setCanonical(url()->full());
        SEOTools::opengraph()->setTitle(SEOTools::getTitle());
        SEOTools::opengraph()->setUrl(url()->full());
        if($Page->image != null){
            SEOTools::opengraph()->addImage(url(asset($Page->image)));
        }
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::opengraph()->addProperty('locale', 'tr');
        SEOTools::twitter()->setTitle(SEOTools::getTitle());
        SEOTools::jsonLd()->setTitle(SEOTools::getTitle());
        if($Page->image != null){
            SEOTools::jsonLd()->addImage(url(asset($Page->image)));
        }
        
        return view('details.poster-details',compact('Page','Meta', 'Route'));
    }
    
    function presentation(Request $request){
        $Meta = Page::where('slug', 'sunum')->first();
        
        $Page = Presentation::where('slug',$request->slug)->first();
        if (empty($Page)) abort(404);
        $Route = 'presentation';
        
        
        SEOTools::setTitle($Page->meta_title ?? $Page->title);
        SEOTools::setDescription($Page->meta_desc);
        SEOMeta::addKeyword(explode(',', $Page->meta_tags));
        SEOTools::setCanonical(url()->full());
        SEOTools::opengraph()->setTitle(SEOTools::getTitle());
        SEOTools::opengraph()->setUrl(url()->full());
        if($Page->image != null){
            SEOTools::opengraph()->addImage(url(asset($Page->image)));
        }
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::opengraph()->addProperty('locale', 'tr');
        SEOTools::twitter()->setTitle(SEOTools::getTitle());
        SEOTools::jsonLd()->setTitle(SEOTools::getTitle());
        if($Page->image != null){
            SEOTools::jsonLd()->addImage(url(asset($Page->image)));
        }
        
        return view('details.presentation-details',compact('Page','Meta', 'Route'));
    }
    
    function coverage(Request $request){
        $Meta = Page::where('slug', 'kapsama-alanimiz')->first();
        
        $Page = CoverageCity::where('slug',$request->slug)->where('type',1)->first();
        if (empty($Page)) abort(404);
        $Route = 'coverage';
        
        
        SEOTools::setTitle($Page->meta_title ?? $Page->title);
        SEOTools::setDescription($Page->meta_desc);
        SEOMeta::addKeyword(explode(',', $Page->meta_tags));
        SEOTools::setCanonical(url()->full());
        SEOTools::opengraph()->setTitle(SEOTools::getTitle());
        SEOTools::opengraph()->setUrl(url()->full());
        if($Page->image != null){
            SEOTools::opengraph()->addImage(url(asset($Page->image)));
        }
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::opengraph()->addProperty('locale', 'tr');
        SEOTools::twitter()->setTitle(SEOTools::getTitle());
        SEOTools::jsonLd()->setTitle(SEOTools::getTitle());
        if($Page->image != null){
            SEOTools::jsonLd()->addImage(url(asset($Page->image)));
        }
        
        return view('details.coverage-details',compact('Page','Meta', 'Route'));
    }
    
    
    function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                "type" => "required",
                "json.*" => "required",
            ],
            [
                "json.*.required" => "Bu alan zorunludur.",
                ]
            );
            if ($validator->fails()) {
                return redirect()->to(url()->previous())->with('dialog', '1')->with('status', 'error')->with('message', 'Lütfen tüm form alanlarını kontrol edin.')->withErrors($validator)->withInput(request()->all());
            }
            
            $validated = $validator->validate();
            
            if ($request->hasFile('json.file')) {
                $file = $request->file('json.file');
                $fileLocation = Storage::disk('public')->put('hr/', $file);
                $validated['json']['file'] = $fileLocation;
            }
            
            $Store = new Message();
            $Store->type = $validated['type'];
            $Store->json = json_encode($validated['json']);
            
            
            
            
            if ($Store->save()) {
                if (setting('site.mail') !== null) {
                    // SMTP Ayarları
                    Mail::send('mail.default', $validated, function ($msg) use ($validated) {
                        $msg->from(env('MAIL_USERNAME'), setting('site.title'));
                        $msg->to(setting('site.mail'), setting('site.title'));
                        $msg->subject($validated['type']);
                    });
                }
                
                
                return redirect()->to(url()->previous())->with('dialog', '1')->with('status', 'success')->with('message', 'Mesajınız başarıyla iletildi.');
            } else {
                return redirect()->to(url()->previous())->with('dialog', '1')->with('status', 'error')->with('message', 'Mesajınız iletilirken bir hata oluştu. Lütfen daha sonra tekrar deneyin.');
            }
            
        }
        
        function sitemap()
        {
            $Page = Page::all()->except(1);
            $Projects = Project::active()->get();
            $Plans = Plan::active()->get();
            $News = Blog::active()->get();
            
            $content = view('sitemap.index', compact('Page', 'Projects','Plans','News'));
            return response($content)->header('Content-Type', 'application/xml');
        }
    }
    