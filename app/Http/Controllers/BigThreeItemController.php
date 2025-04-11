<?php

namespace App\Http\Controllers;

use App\Models\bigThreeItem;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;


class BigThreeItemController extends Controller
{
    //

    public function syncItems()
    {
        $this->reset();
        $x = Celigo::getExport('https://api.integrator.io/v1/exports/67f9657e27d8b30b9063297e/invoke');

        foreach ($x['data'] as $item) {


            $cr = new BigThreeItem;

            $cr->internalId = $item['id'];
            $cr->itemNumber = $item['itemNumber'];

           $cr->abcSap = $item['abcSap'] == '' ? null : $item['abcSap'];
           $cr->abcStatus = $item['abcStatus'] == '' ? null : $item['abcStatus'];

           $cr->cardinalCin = $item['cardinalCin'] == '' ? null : $item['cardinalCin'];
           $cr->cardinalStatus = $item['cardinalStatus'] == '' ? null : $item['cardinalStatus'];

           $cr->mckEcono = $item['mckEcono'] == '' ? null : $item['mckEcono'];
           $cr->mckStatus = $item['mckStatus'] == '' ? null : $item['mckStatus'];

           $cr->mmsEcono = $item['mmsEcono'] == '' ? null : $item['mmsEcono'];
           $cr->mmsStatus = $item['mmsStatus'] == '' ? null : $item['mmsStatus'];

           $cr->save();

        }


    }

    public function reset()
    {
        BigThreeItem::truncate();
    }

}
