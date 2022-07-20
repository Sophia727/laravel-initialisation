@extends('layouts/app')
@section('content')
    <section class="section_bleue"></section>
    <h1>{{$post}}</h1>
    <div class="carre"></div>
    <img src={{asset('assets/homepagepic.jpg')}} alt="greens">
    <section class="section_grise"></section>
    <article>
        <span class="dot"></span>
        <h2>Eat healthy, live happy, and <br> grow a better relationship</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum possimus modi doloribus, voluptatem suscipit harum? Ipsam ut quos earum id architecto temporibus distinctio voluptate harum.</p>
        <legend>image from <a href="https://fr.freepik.com/photos-gratuite/vue-dessus-assortiment-legumes-dans-sac-papier_12418305.htm#query=legume&position=3&from_view=keyword">Freepik</a></legend>
        <button class="read_more">read more</button>
    </article>
    @endsection
