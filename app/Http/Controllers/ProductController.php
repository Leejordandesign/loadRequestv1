<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function syncItems()
    {
        $items = Celigo::getExport('https://api.integrator.io/v1/exports/67fd269480b0a586f48c76eb/invoke');

        foreach ($items['data'] as $item) {
            $pr = new Product;
            $pr->internal_id = $item['id'];
            $pr->item_number = $item['item_number'];
            $pr->upc_code = '' ? null : $item['upc_code'];
            $pr->display_name = '' ? null : $item['display_name'];
            $pr->description = '' ? null : $item['description'];
            $pr->box_color = '' ? null : $item['box_color'];
            $pr->brand = '' ? null : $item['brand'];
            $pr->subsidiary = '' ? null : $item['subsidiary'];
            $pr->class = '' ? null : $item['class'];
            $pr->ndc_number = '' ? null : $item['ndc_number'];
            $pr->discontinued = '' ? null : $item['discontinued'];
            $pr->vial_type = '' ? null : $item['vial_type'];
            $pr->vial_dram = '' ? null : $item['vial_dram'];
            $pr->vial_color = '' ? null : $item['vial_color'];
            $pr->lid_type = '' ? null : $item['lid_type'];
            $pr->volume = '' ? null : $item['volume'];
            $pr->needle_length = '' ? null : $item['needle_length'];
            $pr->gauge = '' ? null : $item['gauge'];
            $pr->units_per_retail_box = '' ? null : $item['units_per_retail_box'];
            $pr->retail_boxes_per_middle_case = '' ? null : $item['retail_boxes_per_middle_case'];
            $pr->middle_cases_per_shipping_case = '' ? null : $item['middle_cases_per_shipping_case'];
            $pr->retail_boxes_per_shipping_case = '' ? null : $item['retail_boxes_per_shipping_case'];
            $pr->item_length = '' ? null : $item['item_length'];
            $pr->item_width = '' ? null : $item['item_width'];
            $pr->item_height = '' ? null : $item['item_height'];
            $pr->information_download = '' ? null : $item['information_download'];

            $pr->save();

        }

    }

}
