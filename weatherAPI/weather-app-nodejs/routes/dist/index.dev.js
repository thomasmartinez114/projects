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
    'body': '',
    forecast: ''
  });
}); // Weather route

router.post('/weather', function (req, res, next) {
  var city = req.body.city;
  url = url + city + "&" + appId;
  request(url, function (error, response, body) {
    body = JSON.parse(body);

    if (error && response.statusCode != 200) {
      throw error;
    }

    var country = body.sys.country ? body.sys.country : '';
    var forecast = "For city " + city + ', country ' + country;
    res.render('index', {
      body: body,
      forecast: forecast
    });
  });
});
module.exports = router;