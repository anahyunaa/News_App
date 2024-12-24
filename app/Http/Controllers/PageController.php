<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blogPost($slug)
    {
        $posts = [
            'hasto-belum-ditangkap' => [
                'title' => 'Hasto Belum Ditangkap Meski Jadi Tersangka, Ini Alasan KPK',
                'time' => '4 menit yang lalu',
                'image' => 'https://via.placeholder.com/800x400',
                'content' => 'Dalam sebuah konferensi pers yang berlangsung hari ini, KPK mengungkapkan alasan...',
            ],
            'token-listrik-diskon' => [
                'title' => 'Token Listrik Diskon 50%, Ini Perhitungannya',
                'time' => '2 jam yang lalu',
                'image' => 'https://via.placeholder.com/800x400',
                'content' => 'Token listrik diskon kini tersedia, namun ada batasan maksimal...',
            ],
            'jadwal-misa-natal' => [
                'title' => 'Jadwal Misa Malam Natal 2024 di Jakarta',
                'time' => '6 jam yang lalu',
                'image' => 'https://via.placeholder.com/800x400',
                'content' => 'Berbagai gereja di Jakarta telah merilis jadwal misa malam Natal...',
            ],
        ];
    
        if (!array_key_exists($slug, $posts)) {
            abort(404);
        }
    
        $post = $posts[$slug];
        return view('blog-post', compact('post'));
    }
    
    public function profile()
    {
        if (!session('user')) {
            return redirect()->route('login.form')->with('error', 'Silakan login terlebih dahulu.');
        }
    
        $user = session('user');
        return view('profile', compact('user'));
    }

    public function blog()
    {
        $blogs = [
            [
                'title' => 'Hasto Belum Ditangkap Meski Jadi Tersangka',
                'slug' => 'hasto-belum-ditangkap',
                'excerpt' => 'KPK mengungkap alasan mengapa Hasto belum ditangkap meski menjadi tersangka.',
                'time' => '4 menit yang lalu'
            ],
            [
                'title' => 'Token Listrik Diskon 50%, Ini Perhitungannya',
                'slug' => 'token-listrik-diskon',
                'excerpt' => 'Token listrik diskon kini tersedia dengan batasan maksimal.',
                'time' => '2 jam yang lalu'
            ],
            [
                'title' => 'Jadwal Misa Malam Natal 2024 di Jakarta',
                'slug' => 'jadwal-misa-natal',
                'excerpt' => 'Cek jadwal lengkap misa malam Natal 2024 di berbagai gereja Jakarta.',
                'time' => '6 jam yang lalu'
            ]
        ];
    
        return view('blog', compact('blogs'));
    }


    

}

