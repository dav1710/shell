<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Map;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        $locations = [];

        foreach (Map::All() as $address) {

            $locations[] = [
                     'location' => view('admin/map/map-tool-tip')->with(['address' => $address])->render(),
                     'latitude' => $address->latitude,
                     'longitude' => $address->longitude
            ];
        }

        return view('admin/map/map')->with([
                    'locations' => json_encode($locations)
        ]);
    }
}
