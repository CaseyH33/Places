<?php

    class Places
    {
      private $city_name;
      private $length_of_stay;
      private $reason;
      private $rating;

      function __construct($visit_city, $visit_length, $visit_reason, $visit_rating)
      {
          $this->city_name = $visit_city;
          $this->length_of_stay = $visit_length;
          $this->reason = $visit_reason;
          $this->rating = $visit_rating;
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

      function setLengthOfStay()
      {
          $this->length_of_stay = $visit_length;
      }

      function getReason()
      {
          return $this->reason;
      }

      function setReason()
      {
          $this->reason = $visit_reason;
      }

      function getRating()
      {
          return $this->rating;
      }

      function setRating()
      {
          $this->rating = $visit_rating;
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
