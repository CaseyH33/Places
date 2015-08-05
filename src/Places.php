<?php

    class Places
    {
      private $city_name;
      private $length_of_stay;
      private $reason;
      private $rating;
      private $image;

      function __construct($visit_city, $visit_length, $visit_reason, $visit_rating, $image_path)
      {
          $this->city_name = $visit_city;
          $this->length_of_stay = $visit_length;
          $this->reason = $visit_reason;
          $this->rating = $visit_rating;
          $this->image= $image_path;
      }

      function getCityName()
      {
          return $this->city_name;
      }

      function setCityName($new_city_name)
      {
          $this->city_name = $new_city_name;
      }

      function getLengthOfStay()
      {
          return $this->length_of_stay;
      }

      function setLengthOfStay($visit_length)
      {
          $this->length_of_stay = $visit_length;
      }

      function getReason()
      {
          return $this->reason;
      }

      function setReason($visit_reason)
      {
          $this->reason = $visit_reason;
      }

      function getRating()
      {
          return $this->rating;
      }

      function setRating($visit_rating)
      {
          $this->rating = $visit_rating;
      }

      function getImage()
      {
          return $this->image;
      }

      function setImage($image_path)
      {
          $this->image = $image_path;
      }

      function save()
      {
        array_push($_SESSION['list_of_places'], $this);
      }

      static function deleteAll()
      {
        $_SESSION['list_of_places'] = array();
      }

      static function getAll()
      {
        return $_SESSION['list_of_places'];
      }
    }

?>
