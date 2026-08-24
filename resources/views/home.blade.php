@extends('layouts.app')

@push('styles')
    @vite([
        'ressources/css/reset.css',
        'ressources/css/home',
    ])
@endpush

@section('title', 'Isabel Rodriguez Perez Psychologue Bruxelles')

@section('meta_description', 'Isabel Rodriguez Perez, psychologue agréée à Bruxelles, propose un accompagnement psychologique adapté aux adultes et adolescents, dans un cadre bienveillant.')

@section('content')


@endsection
