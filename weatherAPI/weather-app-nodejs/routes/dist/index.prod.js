"use strict";var express=require("express"),router=express.Router(),url="https://climacell-microweather-v1.p.rapidapi.com/weather/realtime",appId="appid=0caPm6hP3YmQqmjvVtgofpcjeVr63lXz",units="&units=metric",request=require("request");router.get("/",function(e,r,t){r.render("index",{title:"Express"})}),module.exports=router;