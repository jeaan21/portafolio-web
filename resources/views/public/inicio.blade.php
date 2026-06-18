@extends('layouts.app')

@section('title', 'Jean Arias | Full Stack Developer & Ingeniero de Sistemas — Lima, Perú')
@section('meta_description', 'Jean Arias — Desarrollador Full Stack e Ingeniero de Sistemas en Lima, Perú. Especializado en React, Laravel, Node.js y arquitecturas cloud. 20+ proyectos entregados. Disponible para proyectos.')
@section('og_title', 'Jean Arias | Full Stack Developer & Ingeniero de Sistemas')
@section('og_description', 'Construyo sistemas empresariales escalables — desde arquitectura backend hasta interfaces modernas. Lima, Perú. 20+ proyectos entregados.')

@section('content')
    @include('public.partials.hero-about')
    @include('public.partials.tech-stack')
    @include('public.partials.experience')
    @include('public.partials.stats')
    @include('public.partials.testimonials')
@endsection
