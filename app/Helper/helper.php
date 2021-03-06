<?php 

function settings()
{
    return \App\Models\GeneralSetting::first();
}

function blogs()
{
    return \App\Models\Blog::latest()->take(2)->get();
}
function countryCode()
{
    return \App\Models\CountryCode::all();
}

function bidding($id, $announcement_id)
{
    return \App\Models\Bidding::where('mover_id', $id)->where('announcement_id', $announcement_id)->first();
}

function totalbid($announcement_id)
{
    return \App\Models\Bidding::where('announcement_id', $announcement_id)->get();
}
function themesettings($id){
    return \App\Models\ThemeSetting::where('user_id', $id)->first();
}