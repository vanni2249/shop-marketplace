@extends('layouts.shop.app')

@section('content')

<div class="py-4 space-y-4">
    <header class="flex flex-row justify-between">
        <h1 class="text-xl px-2 md:px-0">Profile</h1>
    </header>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="bg-white md:rounded-xl shadow p-4 space-y-6">
            <h2>Update your profile</h2>
            <form action="" class="space-y-4">
                <label for="name" class="flex flex-col space-y-1">
                    <span class="text-xs font-semibold">Name</span>
                    <input type="text" name="" id="" class="bg-slate-100 border p-2 text-sm rounded" value="Geovanni Colon">
                </label>
                <label for="name" class="flex flex-col space-y-1">
                    <span class="text-xs font-semibold">Email</span>
                    <input type="text" name="" id="" class="bg-slate-100 border p-2 text-sm rounded" value="vanni2249@gmail.com">
                </label>
                <button class="bg-slate-900 px-4 py-2 text-slate-200 rounded text-xs font-semibold">Update profile</button>
            </form>
        </div>
        <div class="bg-white md:rounded-xl shadow p-4 space-y-6">
            <h2>Change your password</h2>
            <form action="" class="space-y-4">
                <label for="name" class="flex flex-col space-y-1">
                    <span class="text-xs font-semibold">Password</span>
                    <input type="text" name="" id="" class="bg-slate-100 border p-2 text-sm rounded">
                </label>
                <label for="name" class="flex flex-col space-y-1">
                    <span class="text-xs font-semibold">Re-password</span>
                    <input type="text" name="" id="" class="bg-slate-100 border p-2 text-sm rounded">
                </label>
                <button class="bg-slate-900 px-4 py-2 text-slate-200 rounded text-xs font-semibold">Change password</button>
            </form>
        </div>
    </div>

</div>
   
@endsection