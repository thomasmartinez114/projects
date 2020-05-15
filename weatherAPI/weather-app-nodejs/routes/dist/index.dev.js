"use strict";

var express = require('express');

var router = express.Router();
var url = 'https://climacell-microweather-v1.p.rapidapi.com/weather/realtime';
var appId = 'appid=0caPm6hP3YmQqmjvVtgofpcjeVr63lXz';
var units = '&units=metric';

var request = require('request');
/* GET home page. */


router.get('/', function (req, res, next) {
  res.render('index', {
    title: 'Express'
  });
});
module.exports = router;