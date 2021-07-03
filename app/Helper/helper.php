<?php 

function settings()
{
    return \App\Models\GeneralSetting::first();
}

function blogs()
{
    return \App\Models\Blog::latest()->take(2)->get();
}