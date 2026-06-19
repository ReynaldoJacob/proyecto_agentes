<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the properties.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        // Aquí puedes agregar lógica para obtener propiedades de la base de datos
        // Por ahora, retornamos la vista con datos estáticos

        $properties = [
            [
                'id' => 1,
                'title' => 'Residencial Marina View',
                'location' => 'Marina Mazatlán',
                'price' => '420.000',
                'bedrooms' => 3,
                'bathrooms' => 2.5,
                'area' => '210',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuA1KNudDFiw-hMBzrU2BJwe9VfsPXFh_Fg0Y5jv_ppY4-ewMIaUuZY64uBsu0poPcnwmH8ysP12p_k0zVuOMUsVctglzUlN3spsR3SDPNeqtAxZVMDRjBYAUMSM-4U23HyW5itvP4TXYrxqZROrBVYrlmlqBqRuKk_csR1mPTEBeopKjtzEgI5Xjf_XgVfXoGhjEoQdrsVEWmtiLie_oQGwFzxEIzE3TQQ6BpMyfhoUEa0ugGhuwNOtDCvVeZhrqaDD4CjXLYqcAfg',
                'status' => 'DESTACADO',
                'featured' => true
            ],
            [
                'id' => 2,
                'title' => 'Atelier Loft Urbano',
                'location' => 'Centro Histórico',
                'price' => '285.000',
                'bedrooms' => 2,
                'bathrooms' => 2,
                'area' => '95',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDKwqyet5q9cVZB3Vn1mPB1OrOokpMH7puzI2IBRktimGXcImaamniJSAJKPYaseTiIiKP3XrvsEMfBEwDXesMo1wn1oT6R06tjlFfKR1V2quuW5v5phTkSkJHqZWZQaIwd0X1eGbO4SY2fHujWMrVB-ABY_nzj6Pxp80R94qyeE1fKdpeGFjBWaG9GDf0aPAt-4J7wYSFkySVxVBegm278x-5pwwd1uQN7eUFUE0JpWM7is0FTCwRqvFs-TcMio31u_Kanl0OWgrY',
                'status' => 'VENDIDO',
                'featured' => false
            ],
            [
                'id' => 3,
                'title' => 'Villa de Playa Pacific',
                'location' => 'Zona Cerritos',
                'price' => '690.000',
                'bedrooms' => 4,
                'bathrooms' => 4.5,
                'area' => '340',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDjuHIPJKxcDsTSZX4NEKCLKqDyxseT7dgPy_G_sTWmB2upKuzlBfOshCOpVTJ9OW3qQ8dSTZDUKfKlBOGVMdFNxTGpcmqq8V26t8lPm8QBMyRTBXYL3KSp2a_VWA2X_avdK-QTbzFUySkGiZsiIt3w0qdCvSIhBX_ZJXNFD1GSu3rrQR5SIQ17YVAypkv2bpBzKKROQybY8yqTvKG52V0rETHEA_UZlOrugL1y5OrV2Rly35Vpc10VpF940Y-10PhWAwXmJW8xoHM',
                'status' => 'DESTACADO',
                'featured' => true
            ],
            [
                'id' => 4,
                'title' => 'Fairway Mansion',
                'location' => 'El Cid Golf Club',
                'price' => '1.250.000',
                'bedrooms' => 5,
                'bathrooms' => 5,
                'area' => '520',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCpI3xGkeWVEP0oLb-4QWa8EojOAYKYZ81TlCq106INvVEmKB7micAl1Mjw0OSTLEELcrQ7ldjcKJ-vxiDAtQ9vpjhDde_VNFDAfI_86_kgDnyxYxPYG6jLOzqfn2xYCpc3LhTyIm4-Yts3fOsmo3cRLnErdPhKRdV8_SD3LABf_C2-L_GpqdDXfrI_rkiJeBbkxCv4n-CMx9kmWBlVf0gNBlhNbzAx3brxbKmTh_pV8Z50k1eZ097MITtwa82ocdNihTsIDtRb5LA',
                'status' => 'ENTREGA INMEDIATA',
                'featured' => false
            ],
            [
                'id' => 5,
                'title' => 'Luxury Suite Golden',
                'location' => 'Zona Dorada',
                'price' => '185.000',
                'bedrooms' => 1,
                'bathrooms' => 1,
                'area' => '65',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuC67R5VV-cSj3rDQr8cNkbkuvE01SxBvUfdwgz1eSB0SiWnZt23JO4Y1bJIpFPoTC3hNHdJk5C2r5SbvpTrMT2bGEHQTFWSC5WXanW7Z8yGlANBgS7iqUwuy9_Yx2yWd2IwhdnxylEuDLR5Hrx8MaaRpKADDek-Zh_V2MvPvRj9KRCgGrHmxaTFrhrHlNq0Llz7IK3XPjAL9ko6Rq9yRHkUnDfkkdd-mpm7PoImKRQwZNtokLPnQVhlgjiuOfkJm13oOyHtpMx0mVA',
                'status' => 'OPORTUNIDAD',
                'featured' => true
            ],
            [
                'id' => 6,
                'title' => 'Skyline Horizon Tower',
                'location' => 'Punta de Mazatlán',
                'price' => '365.000',
                'bedrooms' => 3,
                'bathrooms' => 3,
                'area' => '175',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuD-uQmItf0vyBSMbpFsqe6s0zddJ3eOWITVz40JJQXSYE-VHAFkOqE1IXQBqK6W8lctM2hfbSdEASBSFugyLRUXaJ__ukzhcr5AgOu9pfRzGkN_aLcHs-1HlCWiP2V1d3JdKTgmJqMo0g8B-eGRxqZ3TKPbD86Cnv9r8XpjnxxX9djKW-QDfDBQrtJokSEr2bEjO2CEaaaIznqOuZbK0INfFOwg6O54ciYHJ5rJMM8DM1VEy1s5xkX5f7U98ASIkMtrFpLpxsEnmCY',
                'status' => 'PRE-VENTA',
                'featured' => false
            ]
        ];

        return view('properties', ['properties' => $properties]);
    }

    /**
     * Display a single property.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        // Aquí obtendrías una propiedad específica de la base de datos
        // Por ahora es un placeholder

        return view('properties.show', ['id' => $id]);
    }
}
