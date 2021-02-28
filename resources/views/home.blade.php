@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" style="height: 150px;" src="/svg/16304616191553750378.svg" alt="">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex">
                <h1> {{ Auth::user()->userName}}</h1>
                <div class="p-2">
                    <a href="#" class="badge badge-primary">Follow</a>
                </div>
            </div>
            <div class="d-flex">
                <div class="pr-4"><strong>123</strong> posts</div>
                <div class="pr-4"><strong>12k</strong> followers</div>
                <div class="pr-4"><strong>45</strong> following</div>
            </div>
            <div class="pt-3 font-weight-bold">
                freecodecamp.org
            </div>
            <div>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia adipisci, at dignissimos cumque nesciunt ipsam itaque.
            </div>
            <div>
                <a href="">www.freecodecamp.com</a>
            </div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fymq2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c1.0.826.826a/s640x640/153401569_3692509470845788_8496420162127667609_n.jpg?tp=1&amp;_nc_ht=instagram.fymq2-1.fna.fbcdn.net&amp;_nc_cat=104&amp;_nc_ohc=wZtCnBuLDTsAX8czQgU&amp;oh=7cd14490477b705859da29026149ea33&amp;oe=60662F7F" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fymq2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c1.0.826.826a/s640x640/153401569_3692509470845788_8496420162127667609_n.jpg?tp=1&amp;_nc_ht=instagram.fymq2-1.fna.fbcdn.net&amp;_nc_cat=104&amp;_nc_ohc=wZtCnBuLDTsAX8czQgU&amp;oh=7cd14490477b705859da29026149ea33&amp;oe=60662F7F" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fymq2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c1.0.826.826a/s640x640/153401569_3692509470845788_8496420162127667609_n.jpg?tp=1&amp;_nc_ht=instagram.fymq2-1.fna.fbcdn.net&amp;_nc_cat=104&amp;_nc_ohc=wZtCnBuLDTsAX8czQgU&amp;oh=7cd14490477b705859da29026149ea33&amp;oe=60662F7F" class="w-100">
        </div>

    </div>
</div>
<!-- {{ session('status') }} -->
@endsection