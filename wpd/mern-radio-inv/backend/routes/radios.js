const router = require("express").Router();
let Radio = require("../models/radio.model");

router.route("/").get((req, res) => {
  Radio.find()
    .then(radios => res.json(radios))
    .catch(err => res.status(400).json("Error: " + err));
});

router.route("/add").post((req, res) => {
  const model = req.body.model;
  //   const serial = req.body.serial;
  //   const mdcid = req.body.mdcid;
  //   const assigned = req.body.assigned;
  //   const date = Date.parse(req.body.date);

  const newRadio = new Radio({
    model
    // serial,
    // mdcid,
    // assigned,
    // date
  });

  newRadio
    .save()
    .then(() => res.json("Radio added!"))
    .catch(err => res.status(400).json("Error: " + err));
});

module.exports = router;
