@extends('layouts.app')

@section('title', 'Admin Portal Login | Jefna Hameed')

@section('content')
<section class="py-20 bg-gradient-to-b from-[#FAF6F0] to-[#F5EFEB] min-h-[80vh] flex items-center justify-center">
    <div class="max-w-md w-full mx-auto px-4">
        <livewire:admin-login />
    </div>
</section>
@endsection
