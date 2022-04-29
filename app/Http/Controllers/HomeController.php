<?php

namespace App\Http\Controllers;

use App\Jobs\OrderJob;
use App\Models\Banner;
use App\Models\Block;
use App\Models\CallRequest;
use App\Models\EmployeeContact;
use App\Models\Partner;
use App\Models\Point;
use App\Models\Price;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Psy\Util\Json;
use Symfony\Component\VarDumper\VarDumper;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $main_block = Block::take(1)->first();
        $banner = Banner::take(1)->first();
        $banner2 = Banner::latest()->take(1)->first();
        $partners = Partner::all();
        $employee_contacts = EmployeeContact::all();
        $prices = Price::latest()->take(3)->get();
        return view('home', compact('main_block', 'banner', 'banner2', 'partners', 'employee_contacts', 'prices'));
    }

    public function getPoints()
    {
        if(request()->ajax()){
            $responseData = [];
            try {
                $points = Point::select('id', 'title_ru', 'description_ru', 'lang', 'lat', 'image', 'direction', 'format', 'width', 'height')->get();
                /** @var Point $point */
                foreach ($points as $point) {
                    $responseData[] = [
                        'id' => $point->id,
                        'title_ru' => $point->title_ru,
                        'description_ru' => $point->description_ru,
                        'lang' => $point->lang,
                        'lat' => $point->lat,
                        'image' => $point->image,
                        'direction' => $point->getDirectionTitleAttribute(),
                        'format' => $point->getFormatTitleAttribute(),
                        'width' => $point->width,
                        'height' => $point->height,
                        'label' => $point->title_ru,
                        'value' => $point->id,
                    ];
                }
            } catch (\Exception $err) {
                return response()->json($err);
            }

            return response()->json(['success' => 1, 'data' => $responseData]);
        }else{
            return abort(404);
        }
    }

    public function saveRequest(Request $request)
    {

        $validator = $request->validate([
            'name' => 'nullable|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'nullable|email|string|max:255',
        ]);

        if ($validator) {
            $order = CallRequest::create($request->all());
            OrderJob::dispatch($order);
            return response()->json(['success' => true]);
        }

        return response()->json(['errors' => $validator->errors()->all()]);
    }

}
