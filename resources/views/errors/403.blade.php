@extends('errors::minimal')

@section('title', __('Prohibido'))
@section('code', '403')
@section('message', __("El usuario no tiene permisos para ver esto" ?: 'Prohibido'))
