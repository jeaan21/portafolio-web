@extends('layouts.app')

@section('title', 'Jean Arias')
@section('description', 'Ingeniero de Sistemas & Full Stack Developer')

@section('content')
    @include('public.partials.hero-about')
    @include('public.partials.tech-stack')
    @include('public.partials.experience')
    @include('public.partials.stats')
    @include('public.partials.testimonials')
@endsection
