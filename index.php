<!DOCTYPE html>
<html lang="en">
<head>
  <title>Survey Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
      $(document).ready(function(){
        $('#originHomeToDay6').click(function() { 
            var day1_trip1_origin = $( "input[name*='day1_trip1_origin']" ).val();
            $( "input[name*='day6_trip1_origin']" ).val(day1_trip1_origin);
        });

        $('#revereseDay1Trip1ToTrip2').click(function() { 
            var day1_trip1_origin = $( "input[name*='day1_trip1_origin']" ).val();
            var day1_trip1_destination = $( "input[name*='day1_trip1_destination']" ).val();
            var day1_trip1_purpose = 1;
            var day1_trip1_segment1_mode = $( "select[name*='day1_trip1_segment1_mode']" ).val();
            var day1_trip1_segment1_distance = $( "input[name*='day1_trip1_segment1_distance']" ).val();
            var day1_trip1_segment1_cost = $( "input[name*='day1_trip1_segment1_cost']" ).val();
            var day1_trip1_segment1_duration = $( "input[name*='day1_trip1_segment1_duration']" ).val();
            var day1_trip1_segment1_time = $( "input[name*='day1_trip1_segment1_time']" ).val();
            var day1_trip1_segment2_mode = $( "select[name*='day1_trip1_segment2_mode']" ).val();
            var day1_trip1_segment2_distance = $( "input[name*='day1_trip1_segment2_distance']" ).val();
            var day1_trip1_segment2_cost = $( "input[name*='day1_trip1_segment2_cost']" ).val();
            var day1_trip1_segment2_duration = $( "input[name*='day1_trip1_segment2_duration']" ).val();
            var day1_trip1_segment2_time = $( "input[name*='day1_trip1_segment2_time']" ).val();
            var day1_trip1_segment3_mode = $( "select[name*='day1_trip1_segment3_mode']" ).val();
            var day1_trip1_segment3_distance = $( "input[name*='day1_trip1_segment3_distance']" ).val();
            var day1_trip1_segment3_cost = $( "input[name*='day1_trip1_segment3_cost']" ).val();
            var day1_trip1_segment3_duration = $( "input[name*='day1_trip1_segment3_duration']" ).val();
            var day1_trip1_segment3_time = $( "input[name*='day1_trip1_segment3_time']" ).val();
            $( "input[name*='day1_trip2_origin']" ).val(day1_trip1_destination);
            $( "input[name*='day1_trip2_destination']" ).val(day1_trip1_origin);
            $( "select[name*='day1_trip2_purpose']" ).val(day1_trip1_purpose);
            $( "select[name*='day1_trip2_segment1_mode']" ).val(day1_trip1_segment1_mode);
            $( "input[name*='day1_trip2_segment1_distance']" ).val(day1_trip1_segment1_distance);
            $( "input[name*='day1_trip2_segment1_cost']" ).val(day1_trip1_segment1_cost);
            $( "input[name*='day1_trip2_segment1_duration']" ).val(day1_trip1_segment1_duration);
            $( "input[name*='day1_trip2_segment1_time']" ).val(day1_trip1_segment1_time);
            $( "select[name*='day1_trip2_segment2_mode']" ).val(day1_trip1_segment2_mode);
            $( "input[name*='day1_trip2_segment2_distance']" ).val(day1_trip1_segment2_distance);
            $( "input[name*='day1_trip2_segment2_cost']" ).val(day1_trip1_segment2_cost);
            $( "input[name*='day1_trip2_segment2_duration']" ).val(day1_trip1_segment2_duration);
            $( "input[name*='day1_trip2_segment2_time']" ).val(day1_trip1_segment2_time);
            $( "select[name*='day1_trip2_segment3_mode']" ).val(day1_trip1_segment3_mode);
            $( "input[name*='day1_trip2_segment3_distance']" ).val(day1_trip1_segment3_distance);
            $( "input[name*='day1_trip2_segment3_cost']" ).val(day1_trip1_segment3_cost);
            $( "input[name*='day1_trip2_segment3_duration']" ).val(day1_trip1_segment3_duration);
            $( "input[name*='day1_trip2_segment3_time']" ).val(day1_trip1_segment3_time);
        });

        $('#revereseDay6Trip1ToTrip2').click(function() { 
            var day6_trip1_origin = $( "input[name*='day6_trip1_origin']" ).val();
            var day6_trip1_destination = $( "input[name*='day6_trip1_destination']" ).val();
            var day6_trip1_purpose = 1;
            var day6_trip1_segment1_mode = $( "select[name*='day6_trip1_segment1_mode']" ).val();
            var day6_trip1_segment1_distance = $( "input[name*='day6_trip1_segment1_distance']" ).val();
            var day6_trip1_segment1_cost = $( "input[name*='day6_trip1_segment1_cost']" ).val();
            var day6_trip1_segment1_duration = $( "input[name*='day6_trip1_segment1_duration']" ).val();
            var day6_trip1_segment1_time = $( "input[name*='day6_trip1_segment1_time']" ).val();
            var day6_trip1_segment2_mode = $( "select[name*='day6_trip1_segment2_mode']" ).val();
            var day6_trip1_segment2_distance = $( "input[name*='day6_trip1_segment2_distance']" ).val();
            var day6_trip1_segment2_cost = $( "input[name*='day6_trip1_segment2_cost']" ).val();
            var day6_trip1_segment2_duration = $( "input[name*='day6_trip1_segment2_duration']" ).val();
            var day6_trip1_segment2_time = $( "input[name*='day6_trip1_segment2_time']" ).val();
            var day6_trip1_segment3_mode = $( "select[name*='day6_trip1_segment3_mode']" ).val();
            var day6_trip1_segment3_distance = $( "input[name*='day6_trip1_segment3_distance']" ).val();
            var day6_trip1_segment3_cost = $( "input[name*='day6_trip1_segment3_cost']" ).val();
            var day6_trip1_segment3_duration = $( "input[name*='day6_trip1_segment3_duration']" ).val();
            var day6_trip1_segment3_time = $( "input[name*='day6_trip1_segment3_time']" ).val();
            $( "input[name*='day6_trip2_origin']" ).val(day6_trip1_destination);
            $( "input[name*='day6_trip2_destination']" ).val(day6_trip1_origin);
            $( "select[name*='day6_trip2_purpose']" ).val(day6_trip1_purpose);
            $( "select[name*='day6_trip2_segment1_mode']" ).val(day6_trip1_segment1_mode);
            $( "input[name*='day6_trip2_segment1_distance']" ).val(day6_trip1_segment1_distance);
            $( "input[name*='day6_trip2_segment1_cost']" ).val(day6_trip1_segment1_cost);
            $( "input[name*='day6_trip2_segment1_duration']" ).val(day6_trip1_segment1_duration);
            $( "input[name*='day6_trip2_segment1_time']" ).val(day6_trip1_segment1_time);
            $( "select[name*='day6_trip2_segment2_mode']" ).val(day6_trip1_segment2_mode);
            $( "input[name*='day6_trip2_segment2_distance']" ).val(day6_trip1_segment2_distance);
            $( "input[name*='day6_trip2_segment2_cost']" ).val(day6_trip1_segment2_cost);
            $( "input[name*='day6_trip2_segment2_duration']" ).val(day6_trip1_segment2_duration);
            $( "input[name*='day6_trip2_segment2_time']" ).val(day6_trip1_segment2_time);
            $( "select[name*='day6_trip2_segment3_mode']" ).val(day6_trip1_segment3_mode);
            $( "input[name*='day6_trip2_segment3_distance']" ).val(day6_trip1_segment3_distance);
            $( "input[name*='day6_trip2_segment3_cost']" ).val(day6_trip1_segment3_cost);
            $( "input[name*='day6_trip2_segment3_duration']" ).val(day6_trip1_segment3_duration);
            $( "input[name*='day6_trip2_segment3_time']" ).val(day6_trip1_segment3_time);
        });

        $('#day2trip1').click(function() {
            
            var day1_trip1_origin = $( "input[name*='day1_trip1_origin']" ).val();
            var day1_trip1_destination = $( "input[name*='day1_trip1_destination']" ).val();
            var day1_trip1_purpose = $( "select[name*='day1_trip1_purpose']" ).val();
            var day1_trip1_segment1_mode = $( "select[name*='day1_trip1_segment1_mode']" ).val();
            var day1_trip1_segment1_distance = $( "input[name*='day1_trip1_segment1_distance']" ).val();
            var day1_trip1_segment1_cost = $( "input[name*='day1_trip1_segment1_cost']" ).val();
            var day1_trip1_segment1_duration = $( "input[name*='day1_trip1_segment1_duration']" ).val();
            var day1_trip1_segment1_time = $( "input[name*='day1_trip1_segment1_time']" ).val();
            var day1_trip1_segment2_mode = $( "select[name*='day1_trip1_segment2_mode']" ).val();
            var day1_trip1_segment2_distance = $( "input[name*='day1_trip1_segment2_distance']" ).val();
            var day1_trip1_segment2_cost = $( "input[name*='day1_trip1_segment2_cost']" ).val();
            var day1_trip1_segment2_duration = $( "input[name*='day1_trip1_segment2_duration']" ).val();
            var day1_trip1_segment2_time = $( "input[name*='day1_trip1_segment2_time']" ).val();
            var day1_trip1_segment3_mode = $( "select[name*='day1_trip1_segment3_mode']" ).val();
            var day1_trip1_segment3_distance = $( "input[name*='day1_trip1_segment3_distance']" ).val();
            var day1_trip1_segment3_cost = $( "input[name*='day1_trip1_segment3_cost']" ).val();
            var day1_trip1_segment3_duration = $( "input[name*='day1_trip1_segment3_duration']" ).val();
            var day1_trip1_segment3_time = $( "input[name*='day1_trip1_segment3_time']" ).val();
            $( "input[name*='day2_trip1_origin']" ).val(day1_trip1_origin);
            $( "input[name*='day2_trip1_destination']" ).val(day1_trip1_destination);
            $( "select[name*='day2_trip1_purpose']" ).val(day1_trip1_purpose);
            $( "select[name*='day2_trip1_segment1_mode']" ).val(day1_trip1_segment1_mode);
            $( "input[name*='day2_trip1_segment1_distance']" ).val(day1_trip1_segment1_distance);
            $( "input[name*='day2_trip1_segment1_cost']" ).val(day1_trip1_segment1_cost);
            $( "input[name*='day2_trip1_segment1_duration']" ).val(day1_trip1_segment1_duration);
            $( "input[name*='day2_trip1_segment1_time']" ).val(day1_trip1_segment1_time);
            $( "select[name*='day2_trip1_segment2_mode']" ).val(day1_trip1_segment2_mode);
            $( "input[name*='day2_trip1_segment2_distance']" ).val(day1_trip1_segment2_distance);
            $( "input[name*='day2_trip1_segment2_cost']" ).val(day1_trip1_segment2_cost);
            $( "input[name*='day2_trip1_segment2_duration']" ).val(day1_trip1_segment2_duration);
            $( "input[name*='day2_trip1_segment2_time']" ).val(day1_trip1_segment2_time);
            $( "select[name*='day2_trip1_segment3_mode']" ).val(day1_trip1_segment3_mode);
            $( "input[name*='day2_trip1_segment3_distance']" ).val(day1_trip1_segment3_distance);
            $( "input[name*='day2_trip1_segment3_cost']" ).val(day1_trip1_segment3_cost);
            $( "input[name*='day2_trip1_segment3_duration']" ).val(day1_trip1_segment3_duration);
            $( "input[name*='day2_trip1_segment3_time']" ).val(day1_trip1_segment3_time);
        });

        $('#day3trip1').click(function() {
            var day1_trip1_origin = $( "input[name*='day1_trip1_origin']" ).val();
            var day1_trip1_destination = $( "input[name*='day1_trip1_destination']" ).val();
            var day1_trip1_purpose = $( "select[name*='day1_trip1_purpose']" ).val();
            var day1_trip1_segment1_mode = $( "select[name*='day1_trip1_segment1_mode']" ).val();
            var day1_trip1_segment1_distance = $( "input[name*='day1_trip1_segment1_distance']" ).val();
            var day1_trip1_segment1_cost = $( "input[name*='day1_trip1_segment1_cost']" ).val();
            var day1_trip1_segment1_duration = $( "input[name*='day1_trip1_segment1_duration']" ).val();
            var day1_trip1_segment1_time = $( "input[name*='day1_trip1_segment1_time']" ).val();
            var day1_trip1_segment2_mode = $( "select[name*='day1_trip1_segment2_mode']" ).val();
            var day1_trip1_segment2_distance = $( "input[name*='day1_trip1_segment2_distance']" ).val();
            var day1_trip1_segment2_cost = $( "input[name*='day1_trip1_segment2_cost']" ).val();
            var day1_trip1_segment2_duration = $( "input[name*='day1_trip1_segment2_duration']" ).val();
            var day1_trip1_segment2_time = $( "input[name*='day1_trip1_segment2_time']" ).val();
            var day1_trip1_segment3_mode = $( "select[name*='day1_trip1_segment3_mode']" ).val();
            var day1_trip1_segment3_distance = $( "input[name*='day1_trip1_segment3_distance']" ).val();
            var day1_trip1_segment3_cost = $( "input[name*='day1_trip1_segment3_cost']" ).val();
            var day1_trip1_segment3_duration = $( "input[name*='day1_trip1_segment3_duration']" ).val();
            var day1_trip1_segment3_time = $( "input[name*='day1_trip1_segment3_time']" ).val();
            $( "input[name*='day3_trip1_origin']" ).val(day1_trip1_origin);
            $( "input[name*='day3_trip1_destination']" ).val(day1_trip1_destination);
            $( "select[name*='day3_trip1_purpose']" ).val(day1_trip1_purpose);
            $( "select[name*='day3_trip1_segment1_mode']" ).val(day1_trip1_segment1_mode);
            $( "input[name*='day3_trip1_segment1_distance']" ).val(day1_trip1_segment1_distance);
            $( "input[name*='day3_trip1_segment1_cost']" ).val(day1_trip1_segment1_cost);
            $( "input[name*='day3_trip1_segment1_duration']" ).val(day1_trip1_segment1_duration);
            $( "input[name*='day3_trip1_segment1_time']" ).val(day1_trip1_segment1_time);
            $( "select[name*='day3_trip1_segment2_mode']" ).val(day1_trip1_segment2_mode);
            $( "input[name*='day3_trip1_segment2_distance']" ).val(day1_trip1_segment2_distance);
            $( "input[name*='day3_trip1_segment2_cost']" ).val(day1_trip1_segment2_cost);
            $( "input[name*='day3_trip1_segment2_duration']" ).val(day1_trip1_segment2_duration);
            $( "input[name*='day3_trip1_segment2_time']" ).val(day1_trip1_segment2_time);
            $( "select[name*='day3_trip1_segment3_mode']" ).val(day1_trip1_segment3_mode);
            $( "input[name*='day3_trip1_segment3_distance']" ).val(day1_trip1_segment3_distance);
            $( "input[name*='day3_trip1_segment3_cost']" ).val(day1_trip1_segment3_cost);
            $( "input[name*='day3_trip1_segment3_duration']" ).val(day1_trip1_segment3_duration);
            $( "input[name*='day3_trip1_segment3_time']" ).val(day1_trip1_segment3_time);
        });

        $('#day4trip1').click(function() {
            var day1_trip1_origin = $( "input[name*='day1_trip1_origin']" ).val();
            var day1_trip1_destination = $( "input[name*='day1_trip1_destination']" ).val();
            var day1_trip1_purpose = $( "select[name*='day1_trip1_purpose']" ).val();
            var day1_trip1_segment1_mode = $( "select[name*='day1_trip1_segment1_mode']" ).val();
            var day1_trip1_segment1_distance = $( "input[name*='day1_trip1_segment1_distance']" ).val();
            var day1_trip1_segment1_cost = $( "input[name*='day1_trip1_segment1_cost']" ).val();
            var day1_trip1_segment1_duration = $( "input[name*='day1_trip1_segment1_duration']" ).val();
            var day1_trip1_segment1_time = $( "input[name*='day1_trip1_segment1_time']" ).val();
            var day1_trip1_segment2_mode = $( "select[name*='day1_trip1_segment2_mode']" ).val();
            var day1_trip1_segment2_distance = $( "input[name*='day1_trip1_segment2_distance']" ).val();
            var day1_trip1_segment2_cost = $( "input[name*='day1_trip1_segment2_cost']" ).val();
            var day1_trip1_segment2_duration = $( "input[name*='day1_trip1_segment2_duration']" ).val();
            var day1_trip1_segment2_time = $( "input[name*='day1_trip1_segment2_time']" ).val();
            var day1_trip1_segment3_mode = $( "select[name*='day1_trip1_segment3_mode']" ).val();
            var day1_trip1_segment3_distance = $( "input[name*='day1_trip1_segment3_distance']" ).val();
            var day1_trip1_segment3_cost = $( "input[name*='day1_trip1_segment3_cost']" ).val();
            var day1_trip1_segment3_duration = $( "input[name*='day1_trip1_segment3_duration']" ).val();
            var day1_trip1_segment3_time = $( "input[name*='day1_trip1_segment3_time']" ).val();
            $( "input[name*='day4_trip1_origin']" ).val(day1_trip1_origin);
            $( "input[name*='day4_trip1_destination']" ).val(day1_trip1_destination);
            $( "select[name*='day4_trip1_purpose']" ).val(day1_trip1_purpose);
            $( "select[name*='day4_trip1_segment1_mode']" ).val(day1_trip1_segment1_mode);
            $( "input[name*='day4_trip1_segment1_distance']" ).val(day1_trip1_segment1_distance);
            $( "input[name*='day4_trip1_segment1_cost']" ).val(day1_trip1_segment1_cost);
            $( "input[name*='day4_trip1_segment1_duration']" ).val(day1_trip1_segment1_duration);
            $( "input[name*='day4_trip1_segment1_time']" ).val(day1_trip1_segment1_time);
            $( "select[name*='day4_trip1_segment2_mode']" ).val(day1_trip1_segment2_mode);
            $( "input[name*='day4_trip1_segment2_distance']" ).val(day1_trip1_segment2_distance);
            $( "input[name*='day4_trip1_segment2_cost']" ).val(day1_trip1_segment2_cost);
            $( "input[name*='day4_trip1_segment2_duration']" ).val(day1_trip1_segment2_duration);
            $( "input[name*='day4_trip1_segment2_time']" ).val(day1_trip1_segment2_time);
            $( "select[name*='day4_trip1_segment3_mode']" ).val(day1_trip1_segment3_mode);
            $( "input[name*='day4_trip1_segment3_distance']" ).val(day1_trip1_segment3_distance);
            $( "input[name*='day4_trip1_segment3_cost']" ).val(day1_trip1_segment3_cost);
            $( "input[name*='day4_trip1_segment3_duration']" ).val(day1_trip1_segment3_duration);
            $( "input[name*='day4_trip1_segment3_time']" ).val(day1_trip1_segment3_time);
        });

        $('#day5trip1').click(function() {
            var day1_trip1_origin = $( "input[name*='day1_trip1_origin']" ).val();
            var day1_trip1_destination = $( "input[name*='day1_trip1_destination']" ).val();
            var day1_trip1_purpose = $( "select[name*='day1_trip1_purpose']" ).val();
            var day1_trip1_segment1_mode = $( "select[name*='day1_trip1_segment1_mode']" ).val();
            var day1_trip1_segment1_distance = $( "input[name*='day1_trip1_segment1_distance']" ).val();
            var day1_trip1_segment1_cost = $( "input[name*='day1_trip1_segment1_cost']" ).val();
            var day1_trip1_segment1_duration = $( "input[name*='day1_trip1_segment1_duration']" ).val();
            var day1_trip1_segment1_time = $( "input[name*='day1_trip1_segment1_time']" ).val();
            var day1_trip1_segment2_mode = $( "select[name*='day1_trip1_segment2_mode']" ).val();
            var day1_trip1_segment2_distance = $( "input[name*='day1_trip1_segment2_distance']" ).val();
            var day1_trip1_segment2_cost = $( "input[name*='day1_trip1_segment2_cost']" ).val();
            var day1_trip1_segment2_duration = $( "input[name*='day1_trip1_segment2_duration']" ).val();
            var day1_trip1_segment2_time = $( "input[name*='day1_trip1_segment2_time']" ).val();
            var day1_trip1_segment3_mode = $( "select[name*='day1_trip1_segment3_mode']" ).val();
            var day1_trip1_segment3_distance = $( "input[name*='day1_trip1_segment3_distance']" ).val();
            var day1_trip1_segment3_cost = $( "input[name*='day1_trip1_segment3_cost']" ).val();
            var day1_trip1_segment3_duration = $( "input[name*='day1_trip1_segment3_duration']" ).val();
            var day1_trip1_segment3_time = $( "input[name*='day1_trip1_segment3_time']" ).val();
            $( "input[name*='day5_trip1_origin']" ).val(day1_trip1_origin);
            $( "input[name*='day5_trip1_destination']" ).val(day1_trip1_destination);
            $( "select[name*='day5_trip1_purpose']" ).val(day1_trip1_purpose);
            $( "select[name*='day5_trip1_segment1_mode']" ).val(day1_trip1_segment1_mode);
            $( "input[name*='day5_trip1_segment1_distance']" ).val(day1_trip1_segment1_distance);
            $( "input[name*='day5_trip1_segment1_cost']" ).val(day1_trip1_segment1_cost);
            $( "input[name*='day5_trip1_segment1_duration']" ).val(day1_trip1_segment1_duration);
            $( "input[name*='day5_trip1_segment1_time']" ).val(day1_trip1_segment1_time);
            $( "select[name*='day5_trip1_segment2_mode']" ).val(day1_trip1_segment2_mode);
            $( "input[name*='day5_trip1_segment2_distance']" ).val(day1_trip1_segment2_distance);
            $( "input[name*='day5_trip1_segment2_cost']" ).val(day1_trip1_segment2_cost);
            $( "input[name*='day5_trip1_segment2_duration']" ).val(day1_trip1_segment2_duration);
            $( "input[name*='day5_trip1_segment2_time']" ).val(day1_trip1_segment2_time);
            $( "select[name*='day5_trip1_segment3_mode']" ).val(day1_trip1_segment3_mode);
            $( "input[name*='day5_trip1_segment3_distance']" ).val(day1_trip1_segment3_distance);
            $( "input[name*='day5_trip1_segment3_cost']" ).val(day1_trip1_segment3_cost);
            $( "input[name*='day5_trip1_segment3_duration']" ).val(day1_trip1_segment3_duration);
            $( "input[name*='day5_trip1_segment3_time']" ).val(day1_trip1_segment3_time);
        });

        $('#day6trip1').click(function() {
            var day1_trip1_origin = $( "input[name*='day1_trip1_origin']" ).val();
            var day1_trip1_destination = $( "input[name*='day1_trip1_destination']" ).val();
            var day1_trip1_purpose = $( "select[name*='day1_trip1_purpose']" ).val();
            var day1_trip1_segment1_mode = $( "select[name*='day1_trip1_segment1_mode']" ).val();
            var day1_trip1_segment1_distance = $( "input[name*='day1_trip1_segment1_distance']" ).val();
            var day1_trip1_segment1_cost = $( "input[name*='day1_trip1_segment1_cost']" ).val();
            var day1_trip1_segment1_duration = $( "input[name*='day1_trip1_segment1_duration']" ).val();
            var day1_trip1_segment1_time = $( "input[name*='day1_trip1_segment1_time']" ).val();
            var day1_trip1_segment2_mode = $( "select[name*='day1_trip1_segment2_mode']" ).val();
            var day1_trip1_segment2_distance = $( "input[name*='day1_trip1_segment2_distance']" ).val();
            var day1_trip1_segment2_cost = $( "input[name*='day1_trip1_segment2_cost']" ).val();
            var day1_trip1_segment2_duration = $( "input[name*='day1_trip1_segment2_duration']" ).val();
            var day1_trip1_segment2_time = $( "input[name*='day1_trip1_segment2_time']" ).val();
            var day1_trip1_segment3_mode = $( "select[name*='day1_trip1_segment3_mode']" ).val();
            var day1_trip1_segment3_distance = $( "input[name*='day1_trip1_segment3_distance']" ).val();
            var day1_trip1_segment3_cost = $( "input[name*='day1_trip1_segment3_cost']" ).val();
            var day1_trip1_segment3_duration = $( "input[name*='day1_trip1_segment3_duration']" ).val();
            var day1_trip1_segment3_time = $( "input[name*='day1_trip1_segment3_time']" ).val();
            $( "input[name*='day6_trip1_origin']" ).val(day1_trip1_origin);
            $( "input[name*='day6_trip1_destination']" ).val(day1_trip1_destination);
            $( "select[name*='day6_trip1_purpose']" ).val(day1_trip1_purpose);
            $( "select[name*='day6_trip1_segment1_mode']" ).val(day1_trip1_segment1_mode);
            $( "input[name*='day6_trip1_segment1_distance']" ).val(day1_trip1_segment1_distance);
            $( "input[name*='day6_trip1_segment1_cost']" ).val(day1_trip1_segment1_cost);
            $( "input[name*='day6_trip1_segment1_duration']" ).val(day1_trip1_segment1_duration);
            $( "input[name*='day6_trip1_segment1_time']" ).val(day1_trip1_segment1_time);
            $( "select[name*='day6_trip1_segment2_mode']" ).val(day1_trip1_segment2_mode);
            $( "input[name*='day6_trip1_segment2_distance']" ).val(day1_trip1_segment2_distance);
            $( "input[name*='day6_trip1_segment2_cost']" ).val(day1_trip1_segment2_cost);
            $( "input[name*='day6_trip1_segment2_duration']" ).val(day1_trip1_segment2_duration);
            $( "input[name*='day6_trip1_segment2_time']" ).val(day1_trip1_segment2_time);
            $( "select[name*='day6_trip1_segment3_mode']" ).val(day1_trip1_segment3_mode);
            $( "input[name*='day6_trip1_segment3_distance']" ).val(day1_trip1_segment3_distance);
            $( "input[name*='day6_trip1_segment3_cost']" ).val(day1_trip1_segment3_cost);
            $( "input[name*='day6_trip1_segment3_duration']" ).val(day1_trip1_segment3_duration);
            $( "input[name*='day6_trip1_segment3_time']" ).val(day1_trip1_segment3_time);
        });

        $('#day7trip1').click(function() {
            var day1_trip1_origin = $( "input[name*='day1_trip1_origin']" ).val();
            var day1_trip1_destination = $( "input[name*='day1_trip1_destination']" ).val();
            var day1_trip1_purpose = $( "select[name*='day1_trip1_purpose']" ).val();
            var day1_trip1_segment1_mode = $( "select[name*='day1_trip1_segment1_mode']" ).val();
            var day1_trip1_segment1_distance = $( "input[name*='day1_trip1_segment1_distance']" ).val();
            var day1_trip1_segment1_cost = $( "input[name*='day1_trip1_segment1_cost']" ).val();
            var day1_trip1_segment1_duration = $( "input[name*='day1_trip1_segment1_duration']" ).val();
            var day1_trip1_segment1_time = $( "input[name*='day1_trip1_segment1_time']" ).val();
            var day1_trip1_segment2_mode = $( "select[name*='day1_trip1_segment2_mode']" ).val();
            var day1_trip1_segment2_distance = $( "input[name*='day1_trip1_segment2_distance']" ).val();
            var day1_trip1_segment2_cost = $( "input[name*='day1_trip1_segment2_cost']" ).val();
            var day1_trip1_segment2_duration = $( "input[name*='day1_trip1_segment2_duration']" ).val();
            var day1_trip1_segment2_time = $( "input[name*='day1_trip1_segment2_time']" ).val();
            var day1_trip1_segment3_mode = $( "select[name*='day1_trip1_segment3_mode']" ).val();
            var day1_trip1_segment3_distance = $( "input[name*='day1_trip1_segment3_distance']" ).val();
            var day1_trip1_segment3_cost = $( "input[name*='day1_trip1_segment3_cost']" ).val();
            var day1_trip1_segment3_duration = $( "input[name*='day1_trip1_segment3_duration']" ).val();
            var day1_trip1_segment3_time = $( "input[name*='day1_trip1_segment3_time']" ).val();
            $( "input[name*='day7_trip1_origin']" ).val(day1_trip1_origin);
            $( "input[name*='day7_trip1_destination']" ).val(day1_trip1_destination);
            $( "select[name*='day7_trip1_purpose']" ).val(day1_trip1_purpose);
            $( "select[name*='day7_trip1_segment1_mode']" ).val(day1_trip1_segment1_mode);
            $( "input[name*='day7_trip1_segment1_distance']" ).val(day1_trip1_segment1_distance);
            $( "input[name*='day7_trip1_segment1_cost']" ).val(day1_trip1_segment1_cost);
            $( "input[name*='day7_trip1_segment1_duration']" ).val(day1_trip1_segment1_duration);
            $( "input[name*='day7_trip1_segment1_time']" ).val(day1_trip1_segment1_time);
            $( "select[name*='day7_trip1_segment2_mode']" ).val(day1_trip1_segment2_mode);
            $( "input[name*='day7_trip1_segment2_distance']" ).val(day1_trip1_segment2_distance);
            $( "input[name*='day7_trip1_segment2_cost']" ).val(day1_trip1_segment2_cost);
            $( "input[name*='day7_trip1_segment2_duration']" ).val(day1_trip1_segment2_duration);
            $( "input[name*='day7_trip1_segment2_time']" ).val(day1_trip1_segment2_time);
            $( "select[name*='day7_trip1_segment3_mode']" ).val(day1_trip1_segment3_mode);
            $( "input[name*='day7_trip1_segment3_distance']" ).val(day1_trip1_segment3_distance);
            $( "input[name*='day7_trip1_segment3_cost']" ).val(day1_trip1_segment3_cost);
            $( "input[name*='day7_trip1_segment3_duration']" ).val(day1_trip1_segment3_duration);
            $( "input[name*='day7_trip1_segment3_time']" ).val(day1_trip1_segment3_time);
        });

        $('#day2trip2').click(function() {
            
            var day1_trip2_origin = $( "input[name*='day1_trip2_origin']" ).val();
            var day1_trip2_destination = $( "input[name*='day1_trip2_destination']" ).val();
            var day1_trip2_purpose = $( "select[name*='day1_trip2_purpose']" ).val();
            var day1_trip2_segment1_mode = $( "select[name*='day1_trip2_segment1_mode']" ).val();
            var day1_trip2_segment1_distance = $( "input[name*='day1_trip2_segment1_distance']" ).val();
            var day1_trip2_segment1_cost = $( "input[name*='day1_trip2_segment1_cost']" ).val();
            var day1_trip2_segment1_duration = $( "input[name*='day1_trip2_segment1_duration']" ).val();
            var day1_trip2_segment1_time = $( "input[name*='day1_trip2_segment1_time']" ).val();
            var day1_trip2_segment2_mode = $( "select[name*='day1_trip2_segment2_mode']" ).val();
            var day1_trip2_segment2_distance = $( "input[name*='day1_trip2_segment2_distance']" ).val();
            var day1_trip2_segment2_cost = $( "input[name*='day1_trip2_segment2_cost']" ).val();
            var day1_trip2_segment2_duration = $( "input[name*='day1_trip2_segment2_duration']" ).val();
            var day1_trip2_segment2_time = $( "input[name*='day1_trip2_segment2_time']" ).val();
            var day1_trip2_segment3_mode = $( "select[name*='day1_trip2_segment3_mode']" ).val();
            var day1_trip2_segment3_distance = $( "input[name*='day1_trip2_segment3_distance']" ).val();
            var day1_trip2_segment3_cost = $( "input[name*='day1_trip2_segment3_cost']" ).val();
            var day1_trip2_segment3_duration = $( "input[name*='day1_trip2_segment3_duration']" ).val();
            var day1_trip2_segment3_time = $( "input[name*='day1_trip2_segment3_time']" ).val();
            $( "input[name*='day2_trip2_origin']" ).val(day1_trip2_origin);
            $( "input[name*='day2_trip2_destination']" ).val(day1_trip2_destination);
            $( "select[name*='day2_trip2_purpose']" ).val(day1_trip2_purpose);
            $( "select[name*='day2_trip2_segment1_mode']" ).val(day1_trip2_segment1_mode);
            $( "input[name*='day2_trip2_segment1_distance']" ).val(day1_trip2_segment1_distance);
            $( "input[name*='day2_trip2_segment1_cost']" ).val(day1_trip2_segment1_cost);
            $( "input[name*='day2_trip2_segment1_duration']" ).val(day1_trip2_segment1_duration);
            $( "input[name*='day2_trip2_segment1_time']" ).val(day1_trip2_segment1_time);
            $( "select[name*='day2_trip2_segment2_mode']" ).val(day1_trip2_segment2_mode);
            $( "input[name*='day2_trip2_segment2_distance']" ).val(day1_trip2_segment2_distance);
            $( "input[name*='day2_trip2_segment2_cost']" ).val(day1_trip2_segment2_cost);
            $( "input[name*='day2_trip2_segment2_duration']" ).val(day1_trip2_segment2_duration);
            $( "input[name*='day2_trip2_segment2_time']" ).val(day1_trip2_segment2_time);
            $( "select[name*='day2_trip2_segment3_mode']" ).val(day1_trip2_segment3_mode);
            $( "input[name*='day2_trip2_segment3_distance']" ).val(day1_trip2_segment3_distance);
            $( "input[name*='day2_trip2_segment3_cost']" ).val(day1_trip2_segment3_cost);
            $( "input[name*='day2_trip2_segment3_duration']" ).val(day1_trip2_segment3_duration);
            $( "input[name*='day2_trip2_segment3_time']" ).val(day1_trip2_segment3_time);
        });

        $('#day3trip2').click(function() {
            var day1_trip2_origin = $( "input[name*='day1_trip2_origin']" ).val();
            var day1_trip2_destination = $( "input[name*='day1_trip2_destination']" ).val();
            var day1_trip2_purpose = $( "select[name*='day1_trip2_purpose']" ).val();
            var day1_trip2_segment1_mode = $( "select[name*='day1_trip2_segment1_mode']" ).val();
            var day1_trip2_segment1_distance = $( "input[name*='day1_trip2_segment1_distance']" ).val();
            var day1_trip2_segment1_cost = $( "input[name*='day1_trip2_segment1_cost']" ).val();
            var day1_trip2_segment1_duration = $( "input[name*='day1_trip2_segment1_duration']" ).val();
            var day1_trip2_segment1_time = $( "input[name*='day1_trip2_segment1_time']" ).val();
            var day1_trip2_segment2_mode = $( "select[name*='day1_trip2_segment2_mode']" ).val();
            var day1_trip2_segment2_distance = $( "input[name*='day1_trip2_segment2_distance']" ).val();
            var day1_trip2_segment2_cost = $( "input[name*='day1_trip2_segment2_cost']" ).val();
            var day1_trip2_segment2_duration = $( "input[name*='day1_trip2_segment2_duration']" ).val();
            var day1_trip2_segment2_time = $( "input[name*='day1_trip2_segment2_time']" ).val();
            var day1_trip2_segment3_mode = $( "select[name*='day1_trip2_segment3_mode']" ).val();
            var day1_trip2_segment3_distance = $( "input[name*='day1_trip2_segment3_distance']" ).val();
            var day1_trip2_segment3_cost = $( "input[name*='day1_trip2_segment3_cost']" ).val();
            var day1_trip2_segment3_duration = $( "input[name*='day1_trip2_segment3_duration']" ).val();
            var day1_trip2_segment3_time = $( "input[name*='day1_trip2_segment3_time']" ).val();
            $( "input[name*='day3_trip2_origin']" ).val(day1_trip2_origin);
            $( "input[name*='day3_trip2_destination']" ).val(day1_trip2_destination);
            $( "select[name*='day3_trip2_purpose']" ).val(day1_trip2_purpose);
            $( "select[name*='day3_trip2_segment1_mode']" ).val(day1_trip2_segment1_mode);
            $( "input[name*='day3_trip2_segment1_distance']" ).val(day1_trip2_segment1_distance);
            $( "input[name*='day3_trip2_segment1_cost']" ).val(day1_trip2_segment1_cost);
            $( "input[name*='day3_trip2_segment1_duration']" ).val(day1_trip2_segment1_duration);
            $( "input[name*='day3_trip2_segment1_time']" ).val(day1_trip2_segment1_time);
            $( "select[name*='day3_trip2_segment2_mode']" ).val(day1_trip2_segment2_mode);
            $( "input[name*='day3_trip2_segment2_distance']" ).val(day1_trip2_segment2_distance);
            $( "input[name*='day3_trip2_segment2_cost']" ).val(day1_trip2_segment2_cost);
            $( "input[name*='day3_trip2_segment2_duration']" ).val(day1_trip2_segment2_duration);
            $( "input[name*='day3_trip2_segment2_time']" ).val(day1_trip2_segment2_time);
            $( "select[name*='day3_trip2_segment3_mode']" ).val(day1_trip2_segment3_mode);
            $( "input[name*='day3_trip2_segment3_distance']" ).val(day1_trip2_segment3_distance);
            $( "input[name*='day3_trip2_segment3_cost']" ).val(day1_trip2_segment3_cost);
            $( "input[name*='day3_trip2_segment3_duration']" ).val(day1_trip2_segment3_duration);
            $( "input[name*='day3_trip2_segment3_time']" ).val(day1_trip2_segment3_time);
        });

        $('#day4trip2').click(function() {
            var day1_trip2_origin = $( "input[name*='day1_trip2_origin']" ).val();
            var day1_trip2_destination = $( "input[name*='day1_trip2_destination']" ).val();
            var day1_trip2_purpose = $( "select[name*='day1_trip2_purpose']" ).val();
            var day1_trip2_segment1_mode = $( "select[name*='day1_trip2_segment1_mode']" ).val();
            var day1_trip2_segment1_distance = $( "input[name*='day1_trip2_segment1_distance']" ).val();
            var day1_trip2_segment1_cost = $( "input[name*='day1_trip2_segment1_cost']" ).val();
            var day1_trip2_segment1_duration = $( "input[name*='day1_trip2_segment1_duration']" ).val();
            var day1_trip2_segment1_time = $( "input[name*='day1_trip2_segment1_time']" ).val();
            var day1_trip2_segment2_mode = $( "select[name*='day1_trip2_segment2_mode']" ).val();
            var day1_trip2_segment2_distance = $( "input[name*='day1_trip2_segment2_distance']" ).val();
            var day1_trip2_segment2_cost = $( "input[name*='day1_trip2_segment2_cost']" ).val();
            var day1_trip2_segment2_duration = $( "input[name*='day1_trip2_segment2_duration']" ).val();
            var day1_trip2_segment2_time = $( "input[name*='day1_trip2_segment2_time']" ).val();
            var day1_trip2_segment3_mode = $( "select[name*='day1_trip2_segment3_mode']" ).val();
            var day1_trip2_segment3_distance = $( "input[name*='day1_trip2_segment3_distance']" ).val();
            var day1_trip2_segment3_cost = $( "input[name*='day1_trip2_segment3_cost']" ).val();
            var day1_trip2_segment3_duration = $( "input[name*='day1_trip2_segment3_duration']" ).val();
            var day1_trip2_segment3_time = $( "input[name*='day1_trip2_segment3_time']" ).val();
            $( "input[name*='day4_trip2_origin']" ).val(day1_trip2_origin);
            $( "input[name*='day4_trip2_destination']" ).val(day1_trip2_destination);
            $( "select[name*='day4_trip2_purpose']" ).val(day1_trip2_purpose);
            $( "select[name*='day4_trip2_segment1_mode']" ).val(day1_trip2_segment1_mode);
            $( "input[name*='day4_trip2_segment1_distance']" ).val(day1_trip2_segment1_distance);
            $( "input[name*='day4_trip2_segment1_cost']" ).val(day1_trip2_segment1_cost);
            $( "input[name*='day4_trip2_segment1_duration']" ).val(day1_trip2_segment1_duration);
            $( "input[name*='day4_trip2_segment1_time']" ).val(day1_trip2_segment1_time);
            $( "select[name*='day4_trip2_segment2_mode']" ).val(day1_trip2_segment2_mode);
            $( "input[name*='day4_trip2_segment2_distance']" ).val(day1_trip2_segment2_distance);
            $( "input[name*='day4_trip2_segment2_cost']" ).val(day1_trip2_segment2_cost);
            $( "input[name*='day4_trip2_segment2_duration']" ).val(day1_trip2_segment2_duration);
            $( "input[name*='day4_trip2_segment2_time']" ).val(day1_trip2_segment2_time);
            $( "select[name*='day4_trip2_segment3_mode']" ).val(day1_trip2_segment3_mode);
            $( "input[name*='day4_trip2_segment3_distance']" ).val(day1_trip2_segment3_distance);
            $( "input[name*='day4_trip2_segment3_cost']" ).val(day1_trip2_segment3_cost);
            $( "input[name*='day4_trip2_segment3_duration']" ).val(day1_trip2_segment3_duration);
            $( "input[name*='day4_trip2_segment3_time']" ).val(day1_trip2_segment3_time);
        });

        $('#day5trip2').click(function() {
            var day1_trip2_origin = $( "input[name*='day1_trip2_origin']" ).val();
            var day1_trip2_destination = $( "input[name*='day1_trip2_destination']" ).val();
            var day1_trip2_purpose = $( "select[name*='day1_trip2_purpose']" ).val();
            var day1_trip2_segment1_mode = $( "select[name*='day1_trip2_segment1_mode']" ).val();
            var day1_trip2_segment1_distance = $( "input[name*='day1_trip2_segment1_distance']" ).val();
            var day1_trip2_segment1_cost = $( "input[name*='day1_trip2_segment1_cost']" ).val();
            var day1_trip2_segment1_duration = $( "input[name*='day1_trip2_segment1_duration']" ).val();
            var day1_trip2_segment1_time = $( "input[name*='day1_trip2_segment1_time']" ).val();
            var day1_trip2_segment2_mode = $( "select[name*='day1_trip2_segment2_mode']" ).val();
            var day1_trip2_segment2_distance = $( "input[name*='day1_trip2_segment2_distance']" ).val();
            var day1_trip2_segment2_cost = $( "input[name*='day1_trip2_segment2_cost']" ).val();
            var day1_trip2_segment2_duration = $( "input[name*='day1_trip2_segment2_duration']" ).val();
            var day1_trip2_segment2_time = $( "input[name*='day1_trip2_segment2_time']" ).val();
            var day1_trip2_segment3_mode = $( "select[name*='day1_trip2_segment3_mode']" ).val();
            var day1_trip2_segment3_distance = $( "input[name*='day1_trip2_segment3_distance']" ).val();
            var day1_trip2_segment3_cost = $( "input[name*='day1_trip2_segment3_cost']" ).val();
            var day1_trip2_segment3_duration = $( "input[name*='day1_trip2_segment3_duration']" ).val();
            var day1_trip2_segment3_time = $( "input[name*='day1_trip2_segment3_time']" ).val();
            $( "input[name*='day5_trip2_origin']" ).val(day1_trip2_origin);
            $( "input[name*='day5_trip2_destination']" ).val(day1_trip2_destination);
            $( "select[name*='day5_trip2_purpose']" ).val(day1_trip2_purpose);
            $( "select[name*='day5_trip2_segment1_mode']" ).val(day1_trip2_segment1_mode);
            $( "input[name*='day5_trip2_segment1_distance']" ).val(day1_trip2_segment1_distance);
            $( "input[name*='day5_trip2_segment1_cost']" ).val(day1_trip2_segment1_cost);
            $( "input[name*='day5_trip2_segment1_duration']" ).val(day1_trip2_segment1_duration);
            $( "input[name*='day5_trip2_segment1_time']" ).val(day1_trip2_segment1_time);
            $( "select[name*='day5_trip2_segment2_mode']" ).val(day1_trip2_segment2_mode);
            $( "input[name*='day5_trip2_segment2_distance']" ).val(day1_trip2_segment2_distance);
            $( "input[name*='day5_trip2_segment2_cost']" ).val(day1_trip2_segment2_cost);
            $( "input[name*='day5_trip2_segment2_duration']" ).val(day1_trip2_segment2_duration);
            $( "input[name*='day5_trip2_segment2_time']" ).val(day1_trip2_segment2_time);
            $( "select[name*='day5_trip2_segment3_mode']" ).val(day1_trip2_segment3_mode);
            $( "input[name*='day5_trip2_segment3_distance']" ).val(day1_trip2_segment3_distance);
            $( "input[name*='day5_trip2_segment3_cost']" ).val(day1_trip2_segment3_cost);
            $( "input[name*='day5_trip2_segment3_duration']" ).val(day1_trip2_segment3_duration);
            $( "input[name*='day5_trip2_segment3_time']" ).val(day1_trip2_segment3_time);
        });

        $('#day6trip2').click(function() {
            var day1_trip2_origin = $( "input[name*='day1_trip2_origin']" ).val();
            var day1_trip2_destination = $( "input[name*='day1_trip2_destination']" ).val();
            var day1_trip2_purpose = $( "select[name*='day1_trip2_purpose']" ).val();
            var day1_trip2_segment1_mode = $( "select[name*='day1_trip2_segment1_mode']" ).val();
            var day1_trip2_segment1_distance = $( "input[name*='day1_trip2_segment1_distance']" ).val();
            var day1_trip2_segment1_cost = $( "input[name*='day1_trip2_segment1_cost']" ).val();
            var day1_trip2_segment1_duration = $( "input[name*='day1_trip2_segment1_duration']" ).val();
            var day1_trip2_segment1_time = $( "input[name*='day1_trip2_segment1_time']" ).val();
            var day1_trip2_segment2_mode = $( "select[name*='day1_trip2_segment2_mode']" ).val();
            var day1_trip2_segment2_distance = $( "input[name*='day1_trip2_segment2_distance']" ).val();
            var day1_trip2_segment2_cost = $( "input[name*='day1_trip2_segment2_cost']" ).val();
            var day1_trip2_segment2_duration = $( "input[name*='day1_trip2_segment2_duration']" ).val();
            var day1_trip2_segment2_time = $( "input[name*='day1_trip2_segment2_time']" ).val();
            var day1_trip2_segment3_mode = $( "select[name*='day1_trip2_segment3_mode']" ).val();
            var day1_trip2_segment3_distance = $( "input[name*='day1_trip2_segment3_distance']" ).val();
            var day1_trip2_segment3_cost = $( "input[name*='day1_trip2_segment3_cost']" ).val();
            var day1_trip2_segment3_duration = $( "input[name*='day1_trip2_segment3_duration']" ).val();
            var day1_trip2_segment3_time = $( "input[name*='day1_trip2_segment3_time']" ).val();
            $( "input[name*='day6_trip2_origin']" ).val(day1_trip2_origin);
            $( "input[name*='day6_trip2_destination']" ).val(day1_trip2_destination);
            $( "select[name*='day6_trip2_purpose']" ).val(day1_trip2_purpose);
            $( "select[name*='day6_trip2_segment1_mode']" ).val(day1_trip2_segment1_mode);
            $( "input[name*='day6_trip2_segment1_distance']" ).val(day1_trip2_segment1_distance);
            $( "input[name*='day6_trip2_segment1_cost']" ).val(day1_trip2_segment1_cost);
            $( "input[name*='day6_trip2_segment1_duration']" ).val(day1_trip2_segment1_duration);
            $( "input[name*='day6_trip2_segment1_time']" ).val(day1_trip2_segment1_time);
            $( "select[name*='day6_trip2_segment2_mode']" ).val(day1_trip2_segment2_mode);
            $( "input[name*='day6_trip2_segment2_distance']" ).val(day1_trip2_segment2_distance);
            $( "input[name*='day6_trip2_segment2_cost']" ).val(day1_trip2_segment2_cost);
            $( "input[name*='day6_trip2_segment2_duration']" ).val(day1_trip2_segment2_duration);
            $( "input[name*='day6_trip2_segment2_time']" ).val(day1_trip2_segment2_time);
            $( "select[name*='day6_trip2_segment3_mode']" ).val(day1_trip2_segment3_mode);
            $( "input[name*='day6_trip2_segment3_distance']" ).val(day1_trip2_segment3_distance);
            $( "input[name*='day6_trip2_segment3_cost']" ).val(day1_trip2_segment3_cost);
            $( "input[name*='day6_trip2_segment3_duration']" ).val(day1_trip2_segment3_duration);
            $( "input[name*='day6_trip2_segment3_time']" ).val(day1_trip2_segment3_time);
        });

        $('#day7trip2').click(function() {
            var day1_trip2_origin = $( "input[name*='day1_trip2_origin']" ).val();
            var day1_trip2_destination = $( "input[name*='day1_trip2_destination']" ).val();
            var day1_trip2_purpose = $( "select[name*='day1_trip2_purpose']" ).val();
            var day1_trip2_segment1_mode = $( "select[name*='day1_trip2_segment1_mode']" ).val();
            var day1_trip2_segment1_distance = $( "input[name*='day1_trip2_segment1_distance']" ).val();
            var day1_trip2_segment1_cost = $( "input[name*='day1_trip2_segment1_cost']" ).val();
            var day1_trip2_segment1_duration = $( "input[name*='day1_trip2_segment1_duration']" ).val();
            var day1_trip2_segment1_time = $( "input[name*='day1_trip2_segment1_time']" ).val();
            var day1_trip2_segment2_mode = $( "select[name*='day1_trip2_segment2_mode']" ).val();
            var day1_trip2_segment2_distance = $( "input[name*='day1_trip2_segment2_distance']" ).val();
            var day1_trip2_segment2_cost = $( "input[name*='day1_trip2_segment2_cost']" ).val();
            var day1_trip2_segment2_duration = $( "input[name*='day1_trip2_segment2_duration']" ).val();
            var day1_trip2_segment2_time = $( "input[name*='day1_trip2_segment2_time']" ).val();
            var day1_trip2_segment3_mode = $( "select[name*='day1_trip2_segment3_mode']" ).val();
            var day1_trip2_segment3_distance = $( "input[name*='day1_trip2_segment3_distance']" ).val();
            var day1_trip2_segment3_cost = $( "input[name*='day1_trip2_segment3_cost']" ).val();
            var day1_trip2_segment3_duration = $( "input[name*='day1_trip2_segment3_duration']" ).val();
            var day1_trip2_segment3_time = $( "input[name*='day1_trip2_segment3_time']" ).val();
            $( "input[name*='day7_trip2_origin']" ).val(day1_trip2_origin);
            $( "input[name*='day7_trip2_destination']" ).val(day1_trip2_destination);
            $( "select[name*='day7_trip2_purpose']" ).val(day1_trip2_purpose);
            $( "select[name*='day7_trip2_segment1_mode']" ).val(day1_trip2_segment1_mode);
            $( "input[name*='day7_trip2_segment1_distance']" ).val(day1_trip2_segment1_distance);
            $( "input[name*='day7_trip2_segment1_cost']" ).val(day1_trip2_segment1_cost);
            $( "input[name*='day7_trip2_segment1_duration']" ).val(day1_trip2_segment1_duration);
            $( "input[name*='day7_trip2_segment1_time']" ).val(day1_trip2_segment1_time);
            $( "select[name*='day7_trip2_segment2_mode']" ).val(day1_trip2_segment2_mode);
            $( "input[name*='day7_trip2_segment2_distance']" ).val(day1_trip2_segment2_distance);
            $( "input[name*='day7_trip2_segment2_cost']" ).val(day1_trip2_segment2_cost);
            $( "input[name*='day7_trip2_segment2_duration']" ).val(day1_trip2_segment2_duration);
            $( "input[name*='day7_trip2_segment2_time']" ).val(day1_trip2_segment2_time);
            $( "select[name*='day7_trip2_segment3_mode']" ).val(day1_trip2_segment3_mode);
            $( "input[name*='day7_trip2_segment3_distance']" ).val(day1_trip2_segment3_distance);
            $( "input[name*='day7_trip2_segment3_cost']" ).val(day1_trip2_segment3_cost);
            $( "input[name*='day7_trip2_segment3_duration']" ).val(day1_trip2_segment3_duration);
            $( "input[name*='day7_trip2_segment3_time']" ).val(day1_trip2_segment3_time);
        });

        $('#day2trip3').click(function() {
            
            var day1_trip3_origin = $( "input[name*='day1_trip3_origin']" ).val();
            var day1_trip3_destination = $( "input[name*='day1_trip3_destination']" ).val();
            var day1_trip3_purpose = $( "select[name*='day1_trip3_purpose']" ).val();
            var day1_trip3_segment1_mode = $( "select[name*='day1_trip3_segment1_mode']" ).val();
            var day1_trip3_segment1_distance = $( "input[name*='day1_trip3_segment1_distance']" ).val();
            var day1_trip3_segment1_cost = $( "input[name*='day1_trip3_segment1_cost']" ).val();
            var day1_trip3_segment1_duration = $( "input[name*='day1_trip3_segment1_duration']" ).val();
            var day1_trip3_segment1_time = $( "input[name*='day1_trip3_segment1_time']" ).val();
            var day1_trip3_segment2_mode = $( "select[name*='day1_trip3_segment2_mode']" ).val();
            var day1_trip3_segment2_distance = $( "input[name*='day1_trip3_segment2_distance']" ).val();
            var day1_trip3_segment2_cost = $( "input[name*='day1_trip3_segment2_cost']" ).val();
            var day1_trip3_segment2_duration = $( "input[name*='day1_trip3_segment2_duration']" ).val();
            var day1_trip3_segment2_time = $( "input[name*='day1_trip3_segment2_time']" ).val();
            var day1_trip3_segment3_mode = $( "select[name*='day1_trip3_segment3_mode']" ).val();
            var day1_trip3_segment3_distance = $( "input[name*='day1_trip3_segment3_distance']" ).val();
            var day1_trip3_segment3_cost = $( "input[name*='day1_trip3_segment3_cost']" ).val();
            var day1_trip3_segment3_duration = $( "input[name*='day1_trip3_segment3_duration']" ).val();
            var day1_trip3_segment3_time = $( "input[name*='day1_trip3_segment3_time']" ).val();
            $( "input[name*='day2_trip3_origin']" ).val(day1_trip3_origin);
            $( "input[name*='day2_trip3_destination']" ).val(day1_trip3_destination);
            $( "select[name*='day2_trip3_purpose']" ).val(day1_trip3_purpose);
            $( "select[name*='day2_trip3_segment1_mode']" ).val(day1_trip3_segment1_mode);
            $( "input[name*='day2_trip3_segment1_distance']" ).val(day1_trip3_segment1_distance);
            $( "input[name*='day2_trip3_segment1_cost']" ).val(day1_trip3_segment1_cost);
            $( "input[name*='day2_trip3_segment1_duration']" ).val(day1_trip3_segment1_duration);
            $( "input[name*='day2_trip3_segment1_time']" ).val(day1_trip3_segment1_time);
            $( "select[name*='day2_trip3_segment2_mode']" ).val(day1_trip3_segment2_mode);
            $( "input[name*='day2_trip3_segment2_distance']" ).val(day1_trip3_segment2_distance);
            $( "input[name*='day2_trip3_segment2_cost']" ).val(day1_trip3_segment2_cost);
            $( "input[name*='day2_trip3_segment2_duration']" ).val(day1_trip3_segment2_duration);
            $( "input[name*='day2_trip3_segment2_time']" ).val(day1_trip3_segment2_time);
            $( "select[name*='day2_trip3_segment3_mode']" ).val(day1_trip3_segment3_mode);
            $( "input[name*='day2_trip3_segment3_distance']" ).val(day1_trip3_segment3_distance);
            $( "input[name*='day2_trip3_segment3_cost']" ).val(day1_trip3_segment3_cost);
            $( "input[name*='day2_trip3_segment3_duration']" ).val(day1_trip3_segment3_duration);
            $( "input[name*='day2_trip3_segment3_time']" ).val(day1_trip3_segment3_time);
        });

        $('#day3trip3').click(function() {
            var day1_trip3_origin = $( "input[name*='day1_trip3_origin']" ).val();
            var day1_trip3_destination = $( "input[name*='day1_trip3_destination']" ).val();
            var day1_trip3_purpose = $( "select[name*='day1_trip3_purpose']" ).val();
            var day1_trip3_segment1_mode = $( "select[name*='day1_trip3_segment1_mode']" ).val();
            var day1_trip3_segment1_distance = $( "input[name*='day1_trip3_segment1_distance']" ).val();
            var day1_trip3_segment1_cost = $( "input[name*='day1_trip3_segment1_cost']" ).val();
            var day1_trip3_segment1_duration = $( "input[name*='day1_trip3_segment1_duration']" ).val();
            var day1_trip3_segment1_time = $( "input[name*='day1_trip3_segment1_time']" ).val();
            var day1_trip3_segment2_mode = $( "select[name*='day1_trip3_segment2_mode']" ).val();
            var day1_trip3_segment2_distance = $( "input[name*='day1_trip3_segment2_distance']" ).val();
            var day1_trip3_segment2_cost = $( "input[name*='day1_trip3_segment2_cost']" ).val();
            var day1_trip3_segment2_duration = $( "input[name*='day1_trip3_segment2_duration']" ).val();
            var day1_trip3_segment2_time = $( "input[name*='day1_trip3_segment2_time']" ).val();
            var day1_trip3_segment3_mode = $( "select[name*='day1_trip3_segment3_mode']" ).val();
            var day1_trip3_segment3_distance = $( "input[name*='day1_trip3_segment3_distance']" ).val();
            var day1_trip3_segment3_cost = $( "input[name*='day1_trip3_segment3_cost']" ).val();
            var day1_trip3_segment3_duration = $( "input[name*='day1_trip3_segment3_duration']" ).val();
            var day1_trip3_segment3_time = $( "input[name*='day1_trip3_segment3_time']" ).val();
            $( "input[name*='day3_trip3_origin']" ).val(day1_trip3_origin);
            $( "input[name*='day3_trip3_destination']" ).val(day1_trip3_destination);
            $( "select[name*='day3_trip3_purpose']" ).val(day1_trip3_purpose);
            $( "select[name*='day3_trip3_segment1_mode']" ).val(day1_trip3_segment1_mode);
            $( "input[name*='day3_trip3_segment1_distance']" ).val(day1_trip3_segment1_distance);
            $( "input[name*='day3_trip3_segment1_cost']" ).val(day1_trip3_segment1_cost);
            $( "input[name*='day3_trip3_segment1_duration']" ).val(day1_trip3_segment1_duration);
            $( "input[name*='day3_trip3_segment1_time']" ).val(day1_trip3_segment1_time);
            $( "select[name*='day3_trip3_segment2_mode']" ).val(day1_trip3_segment2_mode);
            $( "input[name*='day3_trip3_segment2_distance']" ).val(day1_trip3_segment2_distance);
            $( "input[name*='day3_trip3_segment2_cost']" ).val(day1_trip3_segment2_cost);
            $( "input[name*='day3_trip3_segment2_duration']" ).val(day1_trip3_segment2_duration);
            $( "input[name*='day3_trip3_segment2_time']" ).val(day1_trip3_segment2_time);
            $( "select[name*='day3_trip3_segment3_mode']" ).val(day1_trip3_segment3_mode);
            $( "input[name*='day3_trip3_segment3_distance']" ).val(day1_trip3_segment3_distance);
            $( "input[name*='day3_trip3_segment3_cost']" ).val(day1_trip3_segment3_cost);
            $( "input[name*='day3_trip3_segment3_duration']" ).val(day1_trip3_segment3_duration);
            $( "input[name*='day3_trip3_segment3_time']" ).val(day1_trip3_segment3_time);
        });

        $('#day4trip3').click(function() {
            var day1_trip3_origin = $( "input[name*='day1_trip3_origin']" ).val();
            var day1_trip3_destination = $( "input[name*='day1_trip3_destination']" ).val();
            var day1_trip3_purpose = $( "select[name*='day1_trip3_purpose']" ).val();
            var day1_trip3_segment1_mode = $( "select[name*='day1_trip3_segment1_mode']" ).val();
            var day1_trip3_segment1_distance = $( "input[name*='day1_trip3_segment1_distance']" ).val();
            var day1_trip3_segment1_cost = $( "input[name*='day1_trip3_segment1_cost']" ).val();
            var day1_trip3_segment1_duration = $( "input[name*='day1_trip3_segment1_duration']" ).val();
            var day1_trip3_segment1_time = $( "input[name*='day1_trip3_segment1_time']" ).val();
            var day1_trip3_segment2_mode = $( "select[name*='day1_trip3_segment2_mode']" ).val();
            var day1_trip3_segment2_distance = $( "input[name*='day1_trip3_segment2_distance']" ).val();
            var day1_trip3_segment2_cost = $( "input[name*='day1_trip3_segment2_cost']" ).val();
            var day1_trip3_segment2_duration = $( "input[name*='day1_trip3_segment2_duration']" ).val();
            var day1_trip3_segment2_time = $( "input[name*='day1_trip3_segment2_time']" ).val();
            var day1_trip3_segment3_mode = $( "select[name*='day1_trip3_segment3_mode']" ).val();
            var day1_trip3_segment3_distance = $( "input[name*='day1_trip3_segment3_distance']" ).val();
            var day1_trip3_segment3_cost = $( "input[name*='day1_trip3_segment3_cost']" ).val();
            var day1_trip3_segment3_duration = $( "input[name*='day1_trip3_segment3_duration']" ).val();
            var day1_trip3_segment3_time = $( "input[name*='day1_trip3_segment3_time']" ).val();
            $( "input[name*='day4_trip3_origin']" ).val(day1_trip3_origin);
            $( "input[name*='day4_trip3_destination']" ).val(day1_trip3_destination);
            $( "select[name*='day4_trip3_purpose']" ).val(day1_trip3_purpose);
            $( "select[name*='day4_trip3_segment1_mode']" ).val(day1_trip3_segment1_mode);
            $( "input[name*='day4_trip3_segment1_distance']" ).val(day1_trip3_segment1_distance);
            $( "input[name*='day4_trip3_segment1_cost']" ).val(day1_trip3_segment1_cost);
            $( "input[name*='day4_trip3_segment1_duration']" ).val(day1_trip3_segment1_duration);
            $( "input[name*='day4_trip3_segment1_time']" ).val(day1_trip3_segment1_time);
            $( "select[name*='day4_trip3_segment2_mode']" ).val(day1_trip3_segment2_mode);
            $( "input[name*='day4_trip3_segment2_distance']" ).val(day1_trip3_segment2_distance);
            $( "input[name*='day4_trip3_segment2_cost']" ).val(day1_trip3_segment2_cost);
            $( "input[name*='day4_trip3_segment2_duration']" ).val(day1_trip3_segment2_duration);
            $( "input[name*='day4_trip3_segment2_time']" ).val(day1_trip3_segment2_time);
            $( "select[name*='day4_trip3_segment3_mode']" ).val(day1_trip3_segment3_mode);
            $( "input[name*='day4_trip3_segment3_distance']" ).val(day1_trip3_segment3_distance);
            $( "input[name*='day4_trip3_segment3_cost']" ).val(day1_trip3_segment3_cost);
            $( "input[name*='day4_trip3_segment3_duration']" ).val(day1_trip3_segment3_duration);
            $( "input[name*='day4_trip3_segment3_time']" ).val(day1_trip3_segment3_time);
        });

        $('#day5trip3').click(function() {
            var day1_trip3_origin = $( "input[name*='day1_trip3_origin']" ).val();
            var day1_trip3_destination = $( "input[name*='day1_trip3_destination']" ).val();
            var day1_trip3_purpose = $( "select[name*='day1_trip3_purpose']" ).val();
            var day1_trip3_segment1_mode = $( "select[name*='day1_trip3_segment1_mode']" ).val();
            var day1_trip3_segment1_distance = $( "input[name*='day1_trip3_segment1_distance']" ).val();
            var day1_trip3_segment1_cost = $( "input[name*='day1_trip3_segment1_cost']" ).val();
            var day1_trip3_segment1_duration = $( "input[name*='day1_trip3_segment1_duration']" ).val();
            var day1_trip3_segment1_time = $( "input[name*='day1_trip3_segment1_time']" ).val();
            var day1_trip3_segment2_mode = $( "select[name*='day1_trip3_segment2_mode']" ).val();
            var day1_trip3_segment2_distance = $( "input[name*='day1_trip3_segment2_distance']" ).val();
            var day1_trip3_segment2_cost = $( "input[name*='day1_trip3_segment2_cost']" ).val();
            var day1_trip3_segment2_duration = $( "input[name*='day1_trip3_segment2_duration']" ).val();
            var day1_trip3_segment2_time = $( "input[name*='day1_trip3_segment2_time']" ).val();
            var day1_trip3_segment3_mode = $( "select[name*='day1_trip3_segment3_mode']" ).val();
            var day1_trip3_segment3_distance = $( "input[name*='day1_trip3_segment3_distance']" ).val();
            var day1_trip3_segment3_cost = $( "input[name*='day1_trip3_segment3_cost']" ).val();
            var day1_trip3_segment3_duration = $( "input[name*='day1_trip3_segment3_duration']" ).val();
            var day1_trip3_segment3_time = $( "input[name*='day1_trip3_segment3_time']" ).val();
            $( "input[name*='day5_trip3_origin']" ).val(day1_trip3_origin);
            $( "input[name*='day5_trip3_destination']" ).val(day1_trip3_destination);
            $( "select[name*='day5_trip3_purpose']" ).val(day1_trip3_purpose);
            $( "select[name*='day5_trip3_segment1_mode']" ).val(day1_trip3_segment1_mode);
            $( "input[name*='day5_trip3_segment1_distance']" ).val(day1_trip3_segment1_distance);
            $( "input[name*='day5_trip3_segment1_cost']" ).val(day1_trip3_segment1_cost);
            $( "input[name*='day5_trip3_segment1_duration']" ).val(day1_trip3_segment1_duration);
            $( "input[name*='day5_trip3_segment1_time']" ).val(day1_trip3_segment1_time);
            $( "select[name*='day5_trip3_segment2_mode']" ).val(day1_trip3_segment2_mode);
            $( "input[name*='day5_trip3_segment2_distance']" ).val(day1_trip3_segment2_distance);
            $( "input[name*='day5_trip3_segment2_cost']" ).val(day1_trip3_segment2_cost);
            $( "input[name*='day5_trip3_segment2_duration']" ).val(day1_trip3_segment2_duration);
            $( "input[name*='day5_trip3_segment2_time']" ).val(day1_trip3_segment2_time);
            $( "select[name*='day5_trip3_segment3_mode']" ).val(day1_trip3_segment3_mode);
            $( "input[name*='day5_trip3_segment3_distance']" ).val(day1_trip3_segment3_distance);
            $( "input[name*='day5_trip3_segment3_cost']" ).val(day1_trip3_segment3_cost);
            $( "input[name*='day5_trip3_segment3_duration']" ).val(day1_trip3_segment3_duration);
            $( "input[name*='day5_trip3_segment3_time']" ).val(day1_trip3_segment3_time);
        });

        $('#day6trip3').click(function() {
            var day1_trip3_origin = $( "input[name*='day1_trip3_origin']" ).val();
            var day1_trip3_destination = $( "input[name*='day1_trip3_destination']" ).val();
            var day1_trip3_purpose = $( "select[name*='day1_trip3_purpose']" ).val();
            var day1_trip3_segment1_mode = $( "select[name*='day1_trip3_segment1_mode']" ).val();
            var day1_trip3_segment1_distance = $( "input[name*='day1_trip3_segment1_distance']" ).val();
            var day1_trip3_segment1_cost = $( "input[name*='day1_trip3_segment1_cost']" ).val();
            var day1_trip3_segment1_duration = $( "input[name*='day1_trip3_segment1_duration']" ).val();
            var day1_trip3_segment1_time = $( "input[name*='day1_trip3_segment1_time']" ).val();
            var day1_trip3_segment2_mode = $( "select[name*='day1_trip3_segment2_mode']" ).val();
            var day1_trip3_segment2_distance = $( "input[name*='day1_trip3_segment2_distance']" ).val();
            var day1_trip3_segment2_cost = $( "input[name*='day1_trip3_segment2_cost']" ).val();
            var day1_trip3_segment2_duration = $( "input[name*='day1_trip3_segment2_duration']" ).val();
            var day1_trip3_segment2_time = $( "input[name*='day1_trip3_segment2_time']" ).val();
            var day1_trip3_segment3_mode = $( "select[name*='day1_trip3_segment3_mode']" ).val();
            var day1_trip3_segment3_distance = $( "input[name*='day1_trip3_segment3_distance']" ).val();
            var day1_trip3_segment3_cost = $( "input[name*='day1_trip3_segment3_cost']" ).val();
            var day1_trip3_segment3_duration = $( "input[name*='day1_trip3_segment3_duration']" ).val();
            var day1_trip3_segment3_time = $( "input[name*='day1_trip3_segment3_time']" ).val();
            $( "input[name*='day6_trip3_origin']" ).val(day1_trip3_origin);
            $( "input[name*='day6_trip3_destination']" ).val(day1_trip3_destination);
            $( "select[name*='day6_trip3_purpose']" ).val(day1_trip3_purpose);
            $( "select[name*='day6_trip3_segment1_mode']" ).val(day1_trip3_segment1_mode);
            $( "input[name*='day6_trip3_segment1_distance']" ).val(day1_trip3_segment1_distance);
            $( "input[name*='day6_trip3_segment1_cost']" ).val(day1_trip3_segment1_cost);
            $( "input[name*='day6_trip3_segment1_duration']" ).val(day1_trip3_segment1_duration);
            $( "input[name*='day6_trip3_segment1_time']" ).val(day1_trip3_segment1_time);
            $( "select[name*='day6_trip3_segment2_mode']" ).val(day1_trip3_segment2_mode);
            $( "input[name*='day6_trip3_segment2_distance']" ).val(day1_trip3_segment2_distance);
            $( "input[name*='day6_trip3_segment2_cost']" ).val(day1_trip3_segment2_cost);
            $( "input[name*='day6_trip3_segment2_duration']" ).val(day1_trip3_segment2_duration);
            $( "input[name*='day6_trip3_segment2_time']" ).val(day1_trip3_segment2_time);
            $( "select[name*='day6_trip3_segment3_mode']" ).val(day1_trip3_segment3_mode);
            $( "input[name*='day6_trip3_segment3_distance']" ).val(day1_trip3_segment3_distance);
            $( "input[name*='day6_trip3_segment3_cost']" ).val(day1_trip3_segment3_cost);
            $( "input[name*='day6_trip3_segment3_duration']" ).val(day1_trip3_segment3_duration);
            $( "input[name*='day6_trip3_segment3_time']" ).val(day1_trip3_segment3_time);
        });

        $('#day7trip3').click(function() {
            var day1_trip3_origin = $( "input[name*='day1_trip3_origin']" ).val();
            var day1_trip3_destination = $( "input[name*='day1_trip3_destination']" ).val();
            var day1_trip3_purpose = $( "select[name*='day1_trip3_purpose']" ).val();
            var day1_trip3_segment1_mode = $( "select[name*='day1_trip3_segment1_mode']" ).val();
            var day1_trip3_segment1_distance = $( "input[name*='day1_trip3_segment1_distance']" ).val();
            var day1_trip3_segment1_cost = $( "input[name*='day1_trip3_segment1_cost']" ).val();
            var day1_trip3_segment1_duration = $( "input[name*='day1_trip3_segment1_duration']" ).val();
            var day1_trip3_segment1_time = $( "input[name*='day1_trip3_segment1_time']" ).val();
            var day1_trip3_segment2_mode = $( "select[name*='day1_trip3_segment2_mode']" ).val();
            var day1_trip3_segment2_distance = $( "input[name*='day1_trip3_segment2_distance']" ).val();
            var day1_trip3_segment2_cost = $( "input[name*='day1_trip3_segment2_cost']" ).val();
            var day1_trip3_segment2_duration = $( "input[name*='day1_trip3_segment2_duration']" ).val();
            var day1_trip3_segment2_time = $( "input[name*='day1_trip3_segment2_time']" ).val();
            var day1_trip3_segment3_mode = $( "select[name*='day1_trip3_segment3_mode']" ).val();
            var day1_trip3_segment3_distance = $( "input[name*='day1_trip3_segment3_distance']" ).val();
            var day1_trip3_segment3_cost = $( "input[name*='day1_trip3_segment3_cost']" ).val();
            var day1_trip3_segment3_duration = $( "input[name*='day1_trip3_segment3_duration']" ).val();
            var day1_trip3_segment3_time = $( "input[name*='day1_trip3_segment3_time']" ).val();
            $( "input[name*='day7_trip3_origin']" ).val(day1_trip3_origin);
            $( "input[name*='day7_trip3_destination']" ).val(day1_trip3_destination);
            $( "select[name*='day7_trip3_purpose']" ).val(day1_trip3_purpose);
            $( "select[name*='day7_trip3_segment1_mode']" ).val(day1_trip3_segment1_mode);
            $( "input[name*='day7_trip3_segment1_distance']" ).val(day1_trip3_segment1_distance);
            $( "input[name*='day7_trip3_segment1_cost']" ).val(day1_trip3_segment1_cost);
            $( "input[name*='day7_trip3_segment1_duration']" ).val(day1_trip3_segment1_duration);
            $( "input[name*='day7_trip3_segment1_time']" ).val(day1_trip3_segment1_time);
            $( "select[name*='day7_trip3_segment2_mode']" ).val(day1_trip3_segment2_mode);
            $( "input[name*='day7_trip3_segment2_distance']" ).val(day1_trip3_segment2_distance);
            $( "input[name*='day7_trip3_segment2_cost']" ).val(day1_trip3_segment2_cost);
            $( "input[name*='day7_trip3_segment2_duration']" ).val(day1_trip3_segment2_duration);
            $( "input[name*='day7_trip3_segment2_time']" ).val(day1_trip3_segment2_time);
            $( "select[name*='day7_trip3_segment3_mode']" ).val(day1_trip3_segment3_mode);
            $( "input[name*='day7_trip3_segment3_distance']" ).val(day1_trip3_segment3_distance);
            $( "input[name*='day7_trip3_segment3_cost']" ).val(day1_trip3_segment3_cost);
            $( "input[name*='day7_trip3_segment3_duration']" ).val(day1_trip3_segment3_duration);
            $( "input[name*='day7_trip3_segment3_time']" ).val(day1_trip3_segment3_time);
        });    

        $('#day2trip4').click(function() {
            
            var day1_trip4_origin = $( "input[name*='day1_trip4_origin']" ).val();
            var day1_trip4_destination = $( "input[name*='day1_trip4_destination']" ).val();
            var day1_trip4_purpose = $( "select[name*='day1_trip4_purpose']" ).val();
            var day1_trip4_segment1_mode = $( "select[name*='day1_trip4_segment1_mode']" ).val();
            var day1_trip4_segment1_distance = $( "input[name*='day1_trip4_segment1_distance']" ).val();
            var day1_trip4_segment1_cost = $( "input[name*='day1_trip4_segment1_cost']" ).val();
            var day1_trip4_segment1_duration = $( "input[name*='day1_trip4_segment1_duration']" ).val();
            var day1_trip4_segment1_time = $( "input[name*='day1_trip4_segment1_time']" ).val();
            var day1_trip4_segment2_mode = $( "select[name*='day1_trip4_segment2_mode']" ).val();
            var day1_trip4_segment2_distance = $( "input[name*='day1_trip4_segment2_distance']" ).val();
            var day1_trip4_segment2_cost = $( "input[name*='day1_trip4_segment2_cost']" ).val();
            var day1_trip4_segment2_duration = $( "input[name*='day1_trip4_segment2_duration']" ).val();
            var day1_trip4_segment2_time = $( "input[name*='day1_trip4_segment2_time']" ).val();
            var day1_trip4_segment3_mode = $( "select[name*='day1_trip4_segment3_mode']" ).val();
            var day1_trip4_segment3_distance = $( "input[name*='day1_trip4_segment3_distance']" ).val();
            var day1_trip4_segment3_cost = $( "input[name*='day1_trip4_segment3_cost']" ).val();
            var day1_trip4_segment3_duration = $( "input[name*='day1_trip4_segment3_duration']" ).val();
            var day1_trip4_segment3_time = $( "input[name*='day1_trip4_segment3_time']" ).val();
            $( "input[name*='day2_trip4_origin']" ).val(day1_trip4_origin);
            $( "input[name*='day2_trip4_destination']" ).val(day1_trip4_destination);
            $( "select[name*='day2_trip4_purpose']" ).val(day1_trip4_purpose);
            $( "select[name*='day2_trip4_segment1_mode']" ).val(day1_trip4_segment1_mode);
            $( "input[name*='day2_trip4_segment1_distance']" ).val(day1_trip4_segment1_distance);
            $( "input[name*='day2_trip4_segment1_cost']" ).val(day1_trip4_segment1_cost);
            $( "input[name*='day2_trip4_segment1_duration']" ).val(day1_trip4_segment1_duration);
            $( "input[name*='day2_trip4_segment1_time']" ).val(day1_trip4_segment1_time);
            $( "select[name*='day2_trip4_segment2_mode']" ).val(day1_trip4_segment2_mode);
            $( "input[name*='day2_trip4_segment2_distance']" ).val(day1_trip4_segment2_distance);
            $( "input[name*='day2_trip4_segment2_cost']" ).val(day1_trip4_segment2_cost);
            $( "input[name*='day2_trip4_segment2_duration']" ).val(day1_trip4_segment2_duration);
            $( "input[name*='day2_trip4_segment2_time']" ).val(day1_trip4_segment2_time);
            $( "select[name*='day2_trip4_segment3_mode']" ).val(day1_trip4_segment3_mode);
            $( "input[name*='day2_trip4_segment3_distance']" ).val(day1_trip4_segment3_distance);
            $( "input[name*='day2_trip4_segment3_cost']" ).val(day1_trip4_segment3_cost);
            $( "input[name*='day2_trip4_segment3_duration']" ).val(day1_trip4_segment3_duration);
            $( "input[name*='day2_trip4_segment3_time']" ).val(day1_trip4_segment3_time);
        });

        $('#day3trip4').click(function() {
            var day1_trip4_origin = $( "input[name*='day1_trip4_origin']" ).val();
            var day1_trip4_destination = $( "input[name*='day1_trip4_destination']" ).val();
            var day1_trip4_purpose = $( "select[name*='day1_trip4_purpose']" ).val();
            var day1_trip4_segment1_mode = $( "select[name*='day1_trip4_segment1_mode']" ).val();
            var day1_trip4_segment1_distance = $( "input[name*='day1_trip4_segment1_distance']" ).val();
            var day1_trip4_segment1_cost = $( "input[name*='day1_trip4_segment1_cost']" ).val();
            var day1_trip4_segment1_duration = $( "input[name*='day1_trip4_segment1_duration']" ).val();
            var day1_trip4_segment1_time = $( "input[name*='day1_trip4_segment1_time']" ).val();
            var day1_trip4_segment2_mode = $( "select[name*='day1_trip4_segment2_mode']" ).val();
            var day1_trip4_segment2_distance = $( "input[name*='day1_trip4_segment2_distance']" ).val();
            var day1_trip4_segment2_cost = $( "input[name*='day1_trip4_segment2_cost']" ).val();
            var day1_trip4_segment2_duration = $( "input[name*='day1_trip4_segment2_duration']" ).val();
            var day1_trip4_segment2_time = $( "input[name*='day1_trip4_segment2_time']" ).val();
            var day1_trip4_segment3_mode = $( "select[name*='day1_trip4_segment3_mode']" ).val();
            var day1_trip4_segment3_distance = $( "input[name*='day1_trip4_segment3_distance']" ).val();
            var day1_trip4_segment3_cost = $( "input[name*='day1_trip4_segment3_cost']" ).val();
            var day1_trip4_segment3_duration = $( "input[name*='day1_trip4_segment3_duration']" ).val();
            var day1_trip4_segment3_time = $( "input[name*='day1_trip4_segment3_time']" ).val();
            $( "input[name*='day3_trip4_origin']" ).val(day1_trip4_origin);
            $( "input[name*='day3_trip4_destination']" ).val(day1_trip4_destination);
            $( "select[name*='day3_trip4_purpose']" ).val(day1_trip4_purpose);
            $( "select[name*='day3_trip4_segment1_mode']" ).val(day1_trip4_segment1_mode);
            $( "input[name*='day3_trip4_segment1_distance']" ).val(day1_trip4_segment1_distance);
            $( "input[name*='day3_trip4_segment1_cost']" ).val(day1_trip4_segment1_cost);
            $( "input[name*='day3_trip4_segment1_duration']" ).val(day1_trip4_segment1_duration);
            $( "input[name*='day3_trip4_segment1_time']" ).val(day1_trip4_segment1_time);
            $( "select[name*='day3_trip4_segment2_mode']" ).val(day1_trip4_segment2_mode);
            $( "input[name*='day3_trip4_segment2_distance']" ).val(day1_trip4_segment2_distance);
            $( "input[name*='day3_trip4_segment2_cost']" ).val(day1_trip4_segment2_cost);
            $( "input[name*='day3_trip4_segment2_duration']" ).val(day1_trip4_segment2_duration);
            $( "input[name*='day3_trip4_segment2_time']" ).val(day1_trip4_segment2_time);
            $( "select[name*='day3_trip4_segment3_mode']" ).val(day1_trip4_segment3_mode);
            $( "input[name*='day3_trip4_segment3_distance']" ).val(day1_trip4_segment3_distance);
            $( "input[name*='day3_trip4_segment3_cost']" ).val(day1_trip4_segment3_cost);
            $( "input[name*='day3_trip4_segment3_duration']" ).val(day1_trip4_segment3_duration);
            $( "input[name*='day3_trip4_segment3_time']" ).val(day1_trip4_segment3_time);
        });

        $('#day4trip4').click(function() {
            var day1_trip4_origin = $( "input[name*='day1_trip4_origin']" ).val();
            var day1_trip4_destination = $( "input[name*='day1_trip4_destination']" ).val();
            var day1_trip4_purpose = $( "select[name*='day1_trip4_purpose']" ).val();
            var day1_trip4_segment1_mode = $( "select[name*='day1_trip4_segment1_mode']" ).val();
            var day1_trip4_segment1_distance = $( "input[name*='day1_trip4_segment1_distance']" ).val();
            var day1_trip4_segment1_cost = $( "input[name*='day1_trip4_segment1_cost']" ).val();
            var day1_trip4_segment1_duration = $( "input[name*='day1_trip4_segment1_duration']" ).val();
            var day1_trip4_segment1_time = $( "input[name*='day1_trip4_segment1_time']" ).val();
            var day1_trip4_segment2_mode = $( "select[name*='day1_trip4_segment2_mode']" ).val();
            var day1_trip4_segment2_distance = $( "input[name*='day1_trip4_segment2_distance']" ).val();
            var day1_trip4_segment2_cost = $( "input[name*='day1_trip4_segment2_cost']" ).val();
            var day1_trip4_segment2_duration = $( "input[name*='day1_trip4_segment2_duration']" ).val();
            var day1_trip4_segment2_time = $( "input[name*='day1_trip4_segment2_time']" ).val();
            var day1_trip4_segment3_mode = $( "select[name*='day1_trip4_segment3_mode']" ).val();
            var day1_trip4_segment3_distance = $( "input[name*='day1_trip4_segment3_distance']" ).val();
            var day1_trip4_segment3_cost = $( "input[name*='day1_trip4_segment3_cost']" ).val();
            var day1_trip4_segment3_duration = $( "input[name*='day1_trip4_segment3_duration']" ).val();
            var day1_trip4_segment3_time = $( "input[name*='day1_trip4_segment3_time']" ).val();
            $( "input[name*='day4_trip4_origin']" ).val(day1_trip4_origin);
            $( "input[name*='day4_trip4_destination']" ).val(day1_trip4_destination);
            $( "select[name*='day4_trip4_purpose']" ).val(day1_trip4_purpose);
            $( "select[name*='day4_trip4_segment1_mode']" ).val(day1_trip4_segment1_mode);
            $( "input[name*='day4_trip4_segment1_distance']" ).val(day1_trip4_segment1_distance);
            $( "input[name*='day4_trip4_segment1_cost']" ).val(day1_trip4_segment1_cost);
            $( "input[name*='day4_trip4_segment1_duration']" ).val(day1_trip4_segment1_duration);
            $( "input[name*='day4_trip4_segment1_time']" ).val(day1_trip4_segment1_time);
            $( "select[name*='day4_trip4_segment2_mode']" ).val(day1_trip4_segment2_mode);
            $( "input[name*='day4_trip4_segment2_distance']" ).val(day1_trip4_segment2_distance);
            $( "input[name*='day4_trip4_segment2_cost']" ).val(day1_trip4_segment2_cost);
            $( "input[name*='day4_trip4_segment2_duration']" ).val(day1_trip4_segment2_duration);
            $( "input[name*='day4_trip4_segment2_time']" ).val(day1_trip4_segment2_time);
            $( "select[name*='day4_trip4_segment3_mode']" ).val(day1_trip4_segment3_mode);
            $( "input[name*='day4_trip4_segment3_distance']" ).val(day1_trip4_segment3_distance);
            $( "input[name*='day4_trip4_segment3_cost']" ).val(day1_trip4_segment3_cost);
            $( "input[name*='day4_trip4_segment3_duration']" ).val(day1_trip4_segment3_duration);
            $( "input[name*='day4_trip4_segment3_time']" ).val(day1_trip4_segment3_time);
        });

        $('#day5trip4').click(function() {
            var day1_trip4_origin = $( "input[name*='day1_trip4_origin']" ).val();
            var day1_trip4_destination = $( "input[name*='day1_trip4_destination']" ).val();
            var day1_trip4_purpose = $( "select[name*='day1_trip4_purpose']" ).val();
            var day1_trip4_segment1_mode = $( "select[name*='day1_trip4_segment1_mode']" ).val();
            var day1_trip4_segment1_distance = $( "input[name*='day1_trip4_segment1_distance']" ).val();
            var day1_trip4_segment1_cost = $( "input[name*='day1_trip4_segment1_cost']" ).val();
            var day1_trip4_segment1_duration = $( "input[name*='day1_trip4_segment1_duration']" ).val();
            var day1_trip4_segment1_time = $( "input[name*='day1_trip4_segment1_time']" ).val();
            var day1_trip4_segment2_mode = $( "select[name*='day1_trip4_segment2_mode']" ).val();
            var day1_trip4_segment2_distance = $( "input[name*='day1_trip4_segment2_distance']" ).val();
            var day1_trip4_segment2_cost = $( "input[name*='day1_trip4_segment2_cost']" ).val();
            var day1_trip4_segment2_duration = $( "input[name*='day1_trip4_segment2_duration']" ).val();
            var day1_trip4_segment2_time = $( "input[name*='day1_trip4_segment2_time']" ).val();
            var day1_trip4_segment3_mode = $( "select[name*='day1_trip4_segment3_mode']" ).val();
            var day1_trip4_segment3_distance = $( "input[name*='day1_trip4_segment3_distance']" ).val();
            var day1_trip4_segment3_cost = $( "input[name*='day1_trip4_segment3_cost']" ).val();
            var day1_trip4_segment3_duration = $( "input[name*='day1_trip4_segment3_duration']" ).val();
            var day1_trip4_segment3_time = $( "input[name*='day1_trip4_segment3_time']" ).val();
            $( "input[name*='day5_trip4_origin']" ).val(day1_trip4_origin);
            $( "input[name*='day5_trip4_destination']" ).val(day1_trip4_destination);
            $( "select[name*='day5_trip4_purpose']" ).val(day1_trip4_purpose);
            $( "select[name*='day5_trip4_segment1_mode']" ).val(day1_trip4_segment1_mode);
            $( "input[name*='day5_trip4_segment1_distance']" ).val(day1_trip4_segment1_distance);
            $( "input[name*='day5_trip4_segment1_cost']" ).val(day1_trip4_segment1_cost);
            $( "input[name*='day5_trip4_segment1_duration']" ).val(day1_trip4_segment1_duration);
            $( "input[name*='day5_trip4_segment1_time']" ).val(day1_trip4_segment1_time);
            $( "select[name*='day5_trip4_segment2_mode']" ).val(day1_trip4_segment2_mode);
            $( "input[name*='day5_trip4_segment2_distance']" ).val(day1_trip4_segment2_distance);
            $( "input[name*='day5_trip4_segment2_cost']" ).val(day1_trip4_segment2_cost);
            $( "input[name*='day5_trip4_segment2_duration']" ).val(day1_trip4_segment2_duration);
            $( "input[name*='day5_trip4_segment2_time']" ).val(day1_trip4_segment2_time);
            $( "select[name*='day5_trip4_segment3_mode']" ).val(day1_trip4_segment3_mode);
            $( "input[name*='day5_trip4_segment3_distance']" ).val(day1_trip4_segment3_distance);
            $( "input[name*='day5_trip4_segment3_cost']" ).val(day1_trip4_segment3_cost);
            $( "input[name*='day5_trip4_segment3_duration']" ).val(day1_trip4_segment3_duration);
            $( "input[name*='day5_trip4_segment3_time']" ).val(day1_trip4_segment3_time);
        });

        $('#day6trip4').click(function() {
            var day1_trip4_origin = $( "input[name*='day1_trip4_origin']" ).val();
            var day1_trip4_destination = $( "input[name*='day1_trip4_destination']" ).val();
            var day1_trip4_purpose = $( "select[name*='day1_trip4_purpose']" ).val();
            var day1_trip4_segment1_mode = $( "select[name*='day1_trip4_segment1_mode']" ).val();
            var day1_trip4_segment1_distance = $( "input[name*='day1_trip4_segment1_distance']" ).val();
            var day1_trip4_segment1_cost = $( "input[name*='day1_trip4_segment1_cost']" ).val();
            var day1_trip4_segment1_duration = $( "input[name*='day1_trip4_segment1_duration']" ).val();
            var day1_trip4_segment1_time = $( "input[name*='day1_trip4_segment1_time']" ).val();
            var day1_trip4_segment2_mode = $( "select[name*='day1_trip4_segment2_mode']" ).val();
            var day1_trip4_segment2_distance = $( "input[name*='day1_trip4_segment2_distance']" ).val();
            var day1_trip4_segment2_cost = $( "input[name*='day1_trip4_segment2_cost']" ).val();
            var day1_trip4_segment2_duration = $( "input[name*='day1_trip4_segment2_duration']" ).val();
            var day1_trip4_segment2_time = $( "input[name*='day1_trip4_segment2_time']" ).val();
            var day1_trip4_segment3_mode = $( "select[name*='day1_trip4_segment3_mode']" ).val();
            var day1_trip4_segment3_distance = $( "input[name*='day1_trip4_segment3_distance']" ).val();
            var day1_trip4_segment3_cost = $( "input[name*='day1_trip4_segment3_cost']" ).val();
            var day1_trip4_segment3_duration = $( "input[name*='day1_trip4_segment3_duration']" ).val();
            var day1_trip4_segment3_time = $( "input[name*='day1_trip4_segment3_time']" ).val();
            $( "input[name*='day6_trip4_origin']" ).val(day1_trip4_origin);
            $( "input[name*='day6_trip4_destination']" ).val(day1_trip4_destination);
            $( "select[name*='day6_trip4_purpose']" ).val(day1_trip4_purpose);
            $( "select[name*='day6_trip4_segment1_mode']" ).val(day1_trip4_segment1_mode);
            $( "input[name*='day6_trip4_segment1_distance']" ).val(day1_trip4_segment1_distance);
            $( "input[name*='day6_trip4_segment1_cost']" ).val(day1_trip4_segment1_cost);
            $( "input[name*='day6_trip4_segment1_duration']" ).val(day1_trip4_segment1_duration);
            $( "input[name*='day6_trip4_segment1_time']" ).val(day1_trip4_segment1_time);
            $( "select[name*='day6_trip4_segment2_mode']" ).val(day1_trip4_segment2_mode);
            $( "input[name*='day6_trip4_segment2_distance']" ).val(day1_trip4_segment2_distance);
            $( "input[name*='day6_trip4_segment2_cost']" ).val(day1_trip4_segment2_cost);
            $( "input[name*='day6_trip4_segment2_duration']" ).val(day1_trip4_segment2_duration);
            $( "input[name*='day6_trip4_segment2_time']" ).val(day1_trip4_segment2_time);
            $( "select[name*='day6_trip4_segment3_mode']" ).val(day1_trip4_segment3_mode);
            $( "input[name*='day6_trip4_segment3_distance']" ).val(day1_trip4_segment3_distance);
            $( "input[name*='day6_trip4_segment3_cost']" ).val(day1_trip4_segment3_cost);
            $( "input[name*='day6_trip4_segment3_duration']" ).val(day1_trip4_segment3_duration);
            $( "input[name*='day6_trip4_segment3_time']" ).val(day1_trip4_segment3_time);
        });

        $('#day7trip4').click(function() {
            var day1_trip4_origin = $( "input[name*='day1_trip4_origin']" ).val();
            var day1_trip4_destination = $( "input[name*='day1_trip4_destination']" ).val();
            var day1_trip4_purpose = $( "select[name*='day1_trip4_purpose']" ).val();
            var day1_trip4_segment1_mode = $( "select[name*='day1_trip4_segment1_mode']" ).val();
            var day1_trip4_segment1_distance = $( "input[name*='day1_trip4_segment1_distance']" ).val();
            var day1_trip4_segment1_cost = $( "input[name*='day1_trip4_segment1_cost']" ).val();
            var day1_trip4_segment1_duration = $( "input[name*='day1_trip4_segment1_duration']" ).val();
            var day1_trip4_segment1_time = $( "input[name*='day1_trip4_segment1_time']" ).val();
            var day1_trip4_segment2_mode = $( "select[name*='day1_trip4_segment2_mode']" ).val();
            var day1_trip4_segment2_distance = $( "input[name*='day1_trip4_segment2_distance']" ).val();
            var day1_trip4_segment2_cost = $( "input[name*='day1_trip4_segment2_cost']" ).val();
            var day1_trip4_segment2_duration = $( "input[name*='day1_trip4_segment2_duration']" ).val();
            var day1_trip4_segment2_time = $( "input[name*='day1_trip4_segment2_time']" ).val();
            var day1_trip4_segment3_mode = $( "select[name*='day1_trip4_segment3_mode']" ).val();
            var day1_trip4_segment3_distance = $( "input[name*='day1_trip4_segment3_distance']" ).val();
            var day1_trip4_segment3_cost = $( "input[name*='day1_trip4_segment3_cost']" ).val();
            var day1_trip4_segment3_duration = $( "input[name*='day1_trip4_segment3_duration']" ).val();
            var day1_trip4_segment3_time = $( "input[name*='day1_trip4_segment3_time']" ).val();
            $( "input[name*='day7_trip4_origin']" ).val(day1_trip4_origin);
            $( "input[name*='day7_trip4_destination']" ).val(day1_trip4_destination);
            $( "select[name*='day7_trip4_purpose']" ).val(day1_trip4_purpose);
            $( "select[name*='day7_trip4_segment1_mode']" ).val(day1_trip4_segment1_mode);
            $( "input[name*='day7_trip4_segment1_distance']" ).val(day1_trip4_segment1_distance);
            $( "input[name*='day7_trip4_segment1_cost']" ).val(day1_trip4_segment1_cost);
            $( "input[name*='day7_trip4_segment1_duration']" ).val(day1_trip4_segment1_duration);
            $( "input[name*='day7_trip4_segment1_time']" ).val(day1_trip4_segment1_time);
            $( "select[name*='day7_trip4_segment2_mode']" ).val(day1_trip4_segment2_mode);
            $( "input[name*='day7_trip4_segment2_distance']" ).val(day1_trip4_segment2_distance);
            $( "input[name*='day7_trip4_segment2_cost']" ).val(day1_trip4_segment2_cost);
            $( "input[name*='day7_trip4_segment2_duration']" ).val(day1_trip4_segment2_duration);
            $( "input[name*='day7_trip4_segment2_time']" ).val(day1_trip4_segment2_time);
            $( "select[name*='day7_trip4_segment3_mode']" ).val(day1_trip4_segment3_mode);
            $( "input[name*='day7_trip4_segment3_distance']" ).val(day1_trip4_segment3_distance);
            $( "input[name*='day7_trip4_segment3_cost']" ).val(day1_trip4_segment3_cost);
            $( "input[name*='day7_trip4_segment3_duration']" ).val(day1_trip4_segment3_duration);
            $( "input[name*='day7_trip4_segment3_time']" ).val(day1_trip4_segment3_time);
        }); 

            $('#day6Today7trip1').click(function() {
            var day6_trip1_origin = $( "input[name*='day6_trip1_origin']" ).val();
            var day6_trip1_destination = $( "input[name*='day6_trip1_destination']" ).val();
            var day6_trip1_purpose = $( "select[name*='day6_trip1_purpose']" ).val();
            var day6_trip1_segment1_mode = $( "select[name*='day6_trip1_segment1_mode']" ).val();
            var day6_trip1_segment1_distance = $( "input[name*='day6_trip1_segment1_distance']" ).val();
            var day6_trip1_segment1_cost = $( "input[name*='day6_trip1_segment1_cost']" ).val();
            var day6_trip1_segment1_duration = $( "input[name*='day6_trip1_segment1_duration']" ).val();
            var day6_trip1_segment1_time = $( "input[name*='day6_trip1_segment1_time']" ).val();
            var day6_trip1_segment2_mode = $( "select[name*='day6_trip1_segment2_mode']" ).val();
            var day6_trip1_segment2_distance = $( "input[name*='day6_trip1_segment2_distance']" ).val();
            var day6_trip1_segment2_cost = $( "input[name*='day6_trip1_segment2_cost']" ).val();
            var day6_trip1_segment2_duration = $( "input[name*='day6_trip1_segment2_duration']" ).val();
            var day6_trip1_segment2_time = $( "input[name*='day6_trip1_segment2_time']" ).val();
            var day6_trip1_segment3_mode = $( "select[name*='day6_trip1_segment3_mode']" ).val();
            var day6_trip1_segment3_distance = $( "input[name*='day6_trip1_segment3_distance']" ).val();
            var day6_trip1_segment3_cost = $( "input[name*='day6_trip1_segment3_cost']" ).val();
            var day6_trip1_segment3_duration = $( "input[name*='day6_trip1_segment3_duration']" ).val();
            var day6_trip1_segment3_time = $( "input[name*='day6_trip1_segment3_time']" ).val();
            $( "input[name*='day7_trip1_origin']" ).val(day6_trip1_origin);
            $( "input[name*='day7_trip1_destination']" ).val(day6_trip1_destination);
            $( "select[name*='day7_trip1_purpose']" ).val(day6_trip1_purpose);
            $( "select[name*='day7_trip1_segment1_mode']" ).val(day6_trip1_segment1_mode);
            $( "input[name*='day7_trip1_segment1_distance']" ).val(day6_trip1_segment1_distance);
            $( "input[name*='day7_trip1_segment1_cost']" ).val(day6_trip1_segment1_cost);
            $( "input[name*='day7_trip1_segment1_duration']" ).val(day6_trip1_segment1_duration);
            $( "input[name*='day7_trip1_segment1_time']" ).val(day6_trip1_segment1_time);
            $( "select[name*='day7_trip1_segment2_mode']" ).val(day6_trip1_segment2_mode);
            $( "input[name*='day7_trip1_segment2_distance']" ).val(day6_trip1_segment2_distance);
            $( "input[name*='day7_trip1_segment2_cost']" ).val(day6_trip1_segment2_cost);
            $( "input[name*='day7_trip1_segment2_duration']" ).val(day6_trip1_segment2_duration);
            $( "input[name*='day7_trip1_segment2_time']" ).val(day6_trip1_segment2_time);
            $( "select[name*='day7_trip1_segment3_mode']" ).val(day6_trip1_segment3_mode);
            $( "input[name*='day7_trip1_segment3_distance']" ).val(day6_trip1_segment3_distance);
            $( "input[name*='day7_trip1_segment3_cost']" ).val(day6_trip1_segment3_cost);
            $( "input[name*='day7_trip1_segment3_duration']" ).val(day6_trip1_segment3_duration);
            $( "input[name*='day7_trip1_segment3_time']" ).val(day6_trip1_segment3_time);
        });       

                $('#day6Today7trip2').click(function() {
            var day6_trip2_origin = $( "input[name*='day6_trip2_origin']" ).val();
            var day6_trip2_destination = $( "input[name*='day6_trip2_destination']" ).val();
            var day6_trip2_purpose = $( "select[name*='day6_trip2_purpose']" ).val();
            var day6_trip2_segment1_mode = $( "select[name*='day6_trip2_segment1_mode']" ).val();
            var day6_trip2_segment1_distance = $( "input[name*='day6_trip2_segment1_distance']" ).val();
            var day6_trip2_segment1_cost = $( "input[name*='day6_trip2_segment1_cost']" ).val();
            var day6_trip2_segment1_duration = $( "input[name*='day6_trip2_segment1_duration']" ).val();
            var day6_trip2_segment1_time = $( "input[name*='day6_trip2_segment1_time']" ).val();
            var day6_trip2_segment2_mode = $( "select[name*='day6_trip2_segment2_mode']" ).val();
            var day6_trip2_segment2_distance = $( "input[name*='day6_trip2_segment2_distance']" ).val();
            var day6_trip2_segment2_cost = $( "input[name*='day6_trip2_segment2_cost']" ).val();
            var day6_trip2_segment2_duration = $( "input[name*='day6_trip2_segment2_duration']" ).val();
            var day6_trip2_segment2_time = $( "input[name*='day6_trip2_segment2_time']" ).val();
            var day6_trip2_segment3_mode = $( "select[name*='day6_trip2_segment3_mode']" ).val();
            var day6_trip2_segment3_distance = $( "input[name*='day6_trip2_segment3_distance']" ).val();
            var day6_trip2_segment3_cost = $( "input[name*='day6_trip2_segment3_cost']" ).val();
            var day6_trip2_segment3_duration = $( "input[name*='day6_trip2_segment3_duration']" ).val();
            var day6_trip2_segment3_time = $( "input[name*='day6_trip2_segment3_time']" ).val();
            $( "input[name*='day7_trip2_origin']" ).val(day6_trip2_origin);
            $( "input[name*='day7_trip2_destination']" ).val(day6_trip2_destination);
            $( "select[name*='day7_trip2_purpose']" ).val(day6_trip2_purpose);
            $( "select[name*='day7_trip2_segment1_mode']" ).val(day6_trip2_segment1_mode);
            $( "input[name*='day7_trip2_segment1_distance']" ).val(day6_trip2_segment1_distance);
            $( "input[name*='day7_trip2_segment1_cost']" ).val(day6_trip2_segment1_cost);
            $( "input[name*='day7_trip2_segment1_duration']" ).val(day6_trip2_segment1_duration);
            $( "input[name*='day7_trip2_segment1_time']" ).val(day6_trip2_segment1_time);
            $( "select[name*='day7_trip2_segment2_mode']" ).val(day6_trip2_segment2_mode);
            $( "input[name*='day7_trip2_segment2_distance']" ).val(day6_trip2_segment2_distance);
            $( "input[name*='day7_trip2_segment2_cost']" ).val(day6_trip2_segment2_cost);
            $( "input[name*='day7_trip2_segment2_duration']" ).val(day6_trip2_segment2_duration);
            $( "input[name*='day7_trip2_segment2_time']" ).val(day6_trip2_segment2_time);
            $( "select[name*='day7_trip2_segment3_mode']" ).val(day6_trip2_segment3_mode);
            $( "input[name*='day7_trip2_segment3_distance']" ).val(day6_trip2_segment3_distance);
            $( "input[name*='day7_trip2_segment3_cost']" ).val(day6_trip2_segment3_cost);
            $( "input[name*='day7_trip2_segment3_duration']" ).val(day6_trip2_segment3_duration);
            $( "input[name*='day7_trip2_segment3_time']" ).val(day6_trip2_segment3_time);
        });

                $('#day6Today7trip3').click(function() {
            var day6_trip3_origin = $( "input[name*='day6_trip3_origin']" ).val();
            var day6_trip3_destination = $( "input[name*='day6_trip3_destination']" ).val();
            var day6_trip3_purpose = $( "select[name*='day6_trip3_purpose']" ).val();
            var day6_trip3_segment1_mode = $( "select[name*='day6_trip3_segment1_mode']" ).val();
            var day6_trip3_segment1_distance = $( "input[name*='day6_trip3_segment1_distance']" ).val();
            var day6_trip3_segment1_cost = $( "input[name*='day6_trip3_segment1_cost']" ).val();
            var day6_trip3_segment1_duration = $( "input[name*='day6_trip3_segment1_duration']" ).val();
            var day6_trip3_segment1_time = $( "input[name*='day6_trip3_segment1_time']" ).val();
            var day6_trip3_segment2_mode = $( "select[name*='day6_trip3_segment2_mode']" ).val();
            var day6_trip3_segment2_distance = $( "input[name*='day6_trip3_segment2_distance']" ).val();
            var day6_trip3_segment2_cost = $( "input[name*='day6_trip3_segment2_cost']" ).val();
            var day6_trip3_segment2_duration = $( "input[name*='day6_trip3_segment2_duration']" ).val();
            var day6_trip3_segment2_time = $( "input[name*='day6_trip3_segment2_time']" ).val();
            var day6_trip3_segment3_mode = $( "select[name*='day6_trip3_segment3_mode']" ).val();
            var day6_trip3_segment3_distance = $( "input[name*='day6_trip3_segment3_distance']" ).val();
            var day6_trip3_segment3_cost = $( "input[name*='day6_trip3_segment3_cost']" ).val();
            var day6_trip3_segment3_duration = $( "input[name*='day6_trip3_segment3_duration']" ).val();
            var day6_trip3_segment3_time = $( "input[name*='day6_trip3_segment3_time']" ).val();
            $( "input[name*='day7_trip3_origin']" ).val(day6_trip3_origin);
            $( "input[name*='day7_trip3_destination']" ).val(day6_trip3_destination);
            $( "select[name*='day7_trip3_purpose']" ).val(day6_trip3_purpose);
            $( "select[name*='day7_trip3_segment1_mode']" ).val(day6_trip3_segment1_mode);
            $( "input[name*='day7_trip3_segment1_distance']" ).val(day6_trip3_segment1_distance);
            $( "input[name*='day7_trip3_segment1_cost']" ).val(day6_trip3_segment1_cost);
            $( "input[name*='day7_trip3_segment1_duration']" ).val(day6_trip3_segment1_duration);
            $( "input[name*='day7_trip3_segment1_time']" ).val(day6_trip3_segment1_time);
            $( "select[name*='day7_trip3_segment2_mode']" ).val(day6_trip3_segment2_mode);
            $( "input[name*='day7_trip3_segment2_distance']" ).val(day6_trip3_segment2_distance);
            $( "input[name*='day7_trip3_segment2_cost']" ).val(day6_trip3_segment2_cost);
            $( "input[name*='day7_trip3_segment2_duration']" ).val(day6_trip3_segment2_duration);
            $( "input[name*='day7_trip3_segment2_time']" ).val(day6_trip3_segment2_time);
            $( "select[name*='day7_trip3_segment3_mode']" ).val(day6_trip3_segment3_mode);
            $( "input[name*='day7_trip3_segment3_distance']" ).val(day6_trip3_segment3_distance);
            $( "input[name*='day7_trip3_segment3_cost']" ).val(day6_trip3_segment3_cost);
            $( "input[name*='day7_trip3_segment3_duration']" ).val(day6_trip3_segment3_duration);
            $( "input[name*='day7_trip3_segment3_time']" ).val(day6_trip3_segment3_time);
        });

                $('#day6Today7trip4').click(function() {
            var day6_trip4_origin = $( "input[name*='day6_trip4_origin']" ).val();
            var day6_trip4_destination = $( "input[name*='day6_trip4_destination']" ).val();
            var day6_trip4_purpose = $( "select[name*='day6_trip4_purpose']" ).val();
            var day6_trip4_segment1_mode = $( "select[name*='day6_trip4_segment1_mode']" ).val();
            var day6_trip4_segment1_distance = $( "input[name*='day6_trip4_segment1_distance']" ).val();
            var day6_trip4_segment1_cost = $( "input[name*='day6_trip4_segment1_cost']" ).val();
            var day6_trip4_segment1_duration = $( "input[name*='day6_trip4_segment1_duration']" ).val();
            var day6_trip4_segment1_time = $( "input[name*='day6_trip4_segment1_time']" ).val();
            var day6_trip4_segment2_mode = $( "select[name*='day6_trip4_segment2_mode']" ).val();
            var day6_trip4_segment2_distance = $( "input[name*='day6_trip4_segment2_distance']" ).val();
            var day6_trip4_segment2_cost = $( "input[name*='day6_trip4_segment2_cost']" ).val();
            var day6_trip4_segment2_duration = $( "input[name*='day6_trip4_segment2_duration']" ).val();
            var day6_trip4_segment2_time = $( "input[name*='day6_trip4_segment2_time']" ).val();
            var day6_trip4_segment3_mode = $( "select[name*='day6_trip4_segment3_mode']" ).val();
            var day6_trip4_segment3_distance = $( "input[name*='day6_trip4_segment3_distance']" ).val();
            var day6_trip4_segment3_cost = $( "input[name*='day6_trip4_segment3_cost']" ).val();
            var day6_trip4_segment3_duration = $( "input[name*='day6_trip4_segment3_duration']" ).val();
            var day6_trip4_segment3_time = $( "input[name*='day6_trip4_segment3_time']" ).val();
            $( "input[name*='day7_trip4_origin']" ).val(day6_trip4_origin);
            $( "input[name*='day7_trip4_destination']" ).val(day6_trip4_destination);
            $( "select[name*='day7_trip4_purpose']" ).val(day6_trip4_purpose);
            $( "select[name*='day7_trip4_segment1_mode']" ).val(day6_trip4_segment1_mode);
            $( "input[name*='day7_trip4_segment1_distance']" ).val(day6_trip4_segment1_distance);
            $( "input[name*='day7_trip4_segment1_cost']" ).val(day6_trip4_segment1_cost);
            $( "input[name*='day7_trip4_segment1_duration']" ).val(day6_trip4_segment1_duration);
            $( "input[name*='day7_trip4_segment1_time']" ).val(day6_trip4_segment1_time);
            $( "select[name*='day7_trip4_segment2_mode']" ).val(day6_trip4_segment2_mode);
            $( "input[name*='day7_trip4_segment2_distance']" ).val(day6_trip4_segment2_distance);
            $( "input[name*='day7_trip4_segment2_cost']" ).val(day6_trip4_segment2_cost);
            $( "input[name*='day7_trip4_segment2_duration']" ).val(day6_trip4_segment2_duration);
            $( "input[name*='day7_trip4_segment2_time']" ).val(day6_trip4_segment2_time);
            $( "select[name*='day7_trip4_segment3_mode']" ).val(day6_trip4_segment3_mode);
            $( "input[name*='day7_trip4_segment3_distance']" ).val(day6_trip4_segment3_distance);
            $( "input[name*='day7_trip4_segment3_cost']" ).val(day6_trip4_segment3_cost);
            $( "input[name*='day7_trip4_segment3_duration']" ).val(day6_trip4_segment3_duration);
            $( "input[name*='day7_trip4_segment3_time']" ).val(day6_trip4_segment3_time);
        });    
    });
    
  </script>
</head>
<body>

<div class="container">
  <h1 align="center">Household Survey form</h1>
  
  <form class="form-horizontal" method="POST" action="html.php">
    
    <div class="form-group">
      <label class="control-label col-sm-2">Household ID:</label>
      <div class="col-sm-4">
        <input class="form-control" placeholder="Household ID" name="household_id">
      </div>
      <label class="control-label col-sm-2">Person ID:</label>
      <div class="col-sm-4">          
        <input class="form-control" placeholder="Person ID" name="person_id">
      </div>
    </div>
    
    <br>
    <br>

    
    

<!-- 2. Working day 1 starts -->
<div style="border: 1px solid black; padding:40px;margin:30px">
    
    <h2 align="center">2. Working Day 1 (Sunday)</h2>
    <br>
    <br>

    <h3>Trip 1</h3>
    <div class="form-group">
      <label class="control-label col-sm-2">Origin:</label>
      <div class="col-sm-2">
        <input class="form-control" placeholder="Origin" name="day1_trip1_origin">
      </div>
      <label class="control-label col-sm-2">Destination:</label>
      <div class="col-sm-2">          
        <input class="form-control" placeholder="Destination" name="day1_trip1_destination">
      </div>
      <label class="control-label col-sm-2">Purpose:</label>
      <div class="col-sm-2">          
        <select class="form-control" placeholder="Purpose" name="day1_trip1_purpose">
        <option></option>
            <option></option>
            <option value="1">1. Home</option>
            <option value="2">2. Work</option>
            <option value="3">3. School</option>
            <option value="4">4. Shopping Center/Store/Bazar</option>
            <option value="5">5. Lunch/Dinner</option>
            <option value="6">6. Social Contacts</option>
        </select>
      </div>
    </div>

    <br>

    <h4>Segement 1</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day1_trip1_segment1_mode">
            <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day1_trip1_segment1_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day1_trip1_segment1_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day1_trip1_segment1_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day1_trip1_segment1_time">
        </div>   
    </div>

    <br>

    <h4>Segement 2</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day1_trip1_segment2_mode">
            <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day1_trip1_segment2_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day1_trip1_segment2_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day1_trip1_segment2_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day1_trip1_segment2_time">
        </div>   
    </div>

    <br>

    <h4>Segement 3</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day1_trip1_segment3_mode">
            <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day1_trip1_segment3_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day1_trip1_segment3_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day1_trip1_segment3_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day1_trip1_segment3_time">
        </div>   
    </div>

    <br>
    <h3>Reverse Trip 1 to trip 2 . . .</h3>
    <div class="checkbox">
      <label><input id="revereseDay1Trip1ToTrip2" type="checkbox">Reverse Trip 1 to trip 2</label>
    </div>
    <br>

    <h3>Trip 2</h3>
    <div class="form-group">
      <label class="control-label col-sm-2">Origin:</label>
      <div class="col-sm-2">
        <input class="form-control" placeholder="Origin" name="day1_trip2_origin">
      </div>
      <label class="control-label col-sm-2">Destination:</label>
      <div class="col-sm-2">          
        <input class="form-control" placeholder="Destination" name="day1_trip2_destination">
      </div>
      <label class="control-label col-sm-2">Purpose:</label>
      <div class="col-sm-2">          
        <select class="form-control" placeholder="Purpose" name="day1_trip2_purpose">
            <option></option>
            <option value="1">1. Home</option>
            <option value="2">2. Work</option>
            <option value="3">3. School</option>
            <option value="4">4. Shopping Center/Store/Bazar</option>
            <option value="5">5. Lunch/Dinner</option>
            <option value="6">6. Social Contacts</option>
        </select>
      </div>
    </div>

    <br>

    <h4>Segement 1</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day1_trip2_segment1_mode">
            <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day1_trip2_segment1_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day1_trip2_segment1_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day1_trip2_segment1_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day1_trip2_segment1_time">
        </div>   
    </div>

    <br>

    <h4>Segement 2</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day1_trip2_segment2_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day1_trip2_segment2_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day1_trip2_segment2_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day1_trip2_segment2_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day1_trip2_segment2_time">
        </div>   
    </div>

    <br>

    <h4>Segement 3</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day1_trip2_segment3_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day1_trip2_segment3_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day1_trip2_segment3_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day1_trip2_segment3_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day1_trip2_segment3_time">
        </div>   
    </div>

    <br>
    <br>

    <h3>Trip 3</h3>
    <div class="form-group">
      <label class="control-label col-sm-2">Origin:</label>
      <div class="col-sm-2">
        <input class="form-control" placeholder="Origin;" name="day1_trip3_origin">
      </div>
      <label class="control-label col-sm-2">Destination:</label>
      <div class="col-sm-2">          
        <input class="form-control" placeholder="Destination" name="day1_trip3_destination">
      </div>
      <label class="control-label col-sm-2">Purpose:</label>
      <div class="col-sm-2">          
        <select class="form-control" placeholder="Purpose" name="day1_trip3_purpose">
        <option></option>
            <option value="1">1. Home</option>
            <option value="2">2. Work</option>
            <option value="3">3. School</option>
            <option value="4">4. Shopping Center/Store/Bazar</option>
            <option value="5">5. Lunch/Dinner</option>
            <option value="6">6. Social Contacts</option>
        </select>
      </div>
    </div>

    <br>

    <h4>Segement 1</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day1_trip3_segment1_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day1_trip3_segment1_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day1_trip3_segment1_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day1_trip3_segment1_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day1_trip3_segment1_time">
        </div>   
    </div>

    <br>

    <h4>Segement 2</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day1_trip3_segment2_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day1_trip3_segment2_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day1_trip3_segment2_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day1_trip3_segment2_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day1_trip3_segment2_time">
        </div>   
    </div>

    <br>

    <h4>Segement 3</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day1_trip3_segment3_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day1_trip3_segment3_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day1_trip3_segment3_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day1_trip3_segment3_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day1_trip3_segment3_time">
        </div>   
    </div>

    <br>
    <br>

    <h3>Trip 4</h3>
    <div class="form-group">
      <label class="control-label col-sm-2">Origin:</label>
      <div class="col-sm-2">
        <input class="form-control" placeholder="Origin;" name="day1_trip4_origin">
      </div>
      <label class="control-label col-sm-2">Destination:</label>
      <div class="col-sm-2">          
        <input class="form-control" placeholder="Destination" name="day1_trip4_destination">
      </div>
      <label class="control-label col-sm-2">Purpose:</label>
      <div class="col-sm-2">          
        <select class="form-control" placeholder="Purpose" name="day1_trip4_purpose">
        <option></option>
            <option value="1">1. Home</option>
            <option value="2">2. Work</option>
            <option value="3">3. School</option>
            <option value="4">4. Shopping Center/Store/Bazar</option>
            <option value="5">5. Lunch/Dinner</option>
            <option value="6">6. Social Contacts</option>
        </select>
      </div>
    </div>

    <br>

    <h4>Segement 1</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day1_trip4_segment1_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day1_trip4_segment1_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day1_trip4_segment1_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day1_trip4_segment1_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day1_trip4_segment1_time">
        </div>   
    </div>

    <br>

    <h4>Segement 2</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day1_trip4_segment2_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day1_trip4_segment2_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day1_trip4_segment2_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day1_trip4_segment2_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day1_trip4_segment2_time">
        </div>   
    </div>

    <br>

    <h4>Segement 3</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day1_trip4_segment3_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day1_trip4_segment3_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day1_trip4_segment3_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day1_trip4_segment3_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day1_trip4_segment3_time">
        </div>   
    </div>
    
</div>
<!-- 2. Working day 1 ends -->

    <h3>Copy to . . .</h3>
    <div class="checkbox">
      <label><input id="day2trip1" type="checkbox">day 2 trip 1</label>
      <label><input id="day3trip1" type="checkbox">day 3 trip 1</label>
      <label><input id="day4trip1" type="checkbox">day 4 trip 1</label>
      <label><input id="day5trip1" type="checkbox">day 5 trip 1</label>
      <label><input id="day6trip1" type="checkbox">day 6 trip 1</label>
      <label><input id="day7trip1" type="checkbox">day 7 trip 1</label>
    </div>

    <div class="checkbox">
      <label><input id="day2trip2" type="checkbox">day 2 trip 2</label>
      <label><input id="day3trip2" type="checkbox">day 3 trip 2</label>
      <label><input id="day4trip2" type="checkbox">day 4 trip 2</label>
      <label><input id="day5trip2" type="checkbox">day 5 trip 2</label>
      <label><input id="day6trip2" type="checkbox">day 6 trip 2</label>
      <label><input id="day7trip2" type="checkbox">day 7 trip 2</label>
    </div>

    <div class="checkbox">
      <label><input id="day2trip3" type="checkbox">day 2 trip 3</label>
      <label><input id="day3trip3" type="checkbox">day 3 trip 3</label>
      <label><input id="day4trip3" type="checkbox">day 4 trip 3</label>
      <label><input id="day5trip3" type="checkbox">day 5 trip 3</label>
      <label><input id="day6trip3" type="checkbox">day 6 trip 3</label>
      <label><input id="day7trip3" type="checkbox">day 7 trip 3</label>
    </div>

    <div class="checkbox">
      <label><input id="day2trip4" type="checkbox">day 2 trip 4</label>
      <label><input id="day3trip4" type="checkbox">day 3 trip 4</label>
      <label><input id="day4trip4" type="checkbox">day 4 trip 4</label>
      <label><input id="day5trip4" type="checkbox">day 5 trip 4</label>
      <label><input id="day6trip4" type="checkbox">day 6 trip 4</label>
      <label><input id="day7trip4" type="checkbox">day 7 trip 4</label>
    </div>

    <br>
    <h3>copy trip 1 origin to weekend day 6</h3>
    <div class="checkbox">
      <label><input id="originHomeToDay6" type="checkbox">Copy origin to day 6</label>
    </div>

<!-- 2. Working day 2 starts -->
<div style="border: 1px solid black; padding:40px;margin:30px">

    <h2 align="center">2. Working Day 2 (Monday)</h2>
    <br>
    <br>

    <h3>Trip 1</h3>
    <div class="form-group">
      <label class="control-label col-sm-2">Origin:</label>
      <div class="col-sm-2">
        <input class="form-control" placeholder="Origin" name="day2_trip1_origin">
      </div>
      <label class="control-label col-sm-2">Destination:</label>
      <div class="col-sm-2">          
        <input class="form-control" placeholder="Destination" name="day2_trip1_destination">
      </div>
      <label class="control-label col-sm-2">Purpose:</label>
      <div class="col-sm-2">          
        <select class="form-control" placeholder="Purpose" name="day2_trip1_purpose">
        <option></option>
            <option value="1">1. Home</option>
            <option value="2">2. Work</option>
            <option value="3">3. School</option>
            <option value="4">4. Shopping Center/Store/Bazar</option>
            <option value="5">5. Lunch/Dinner</option>
            <option value="6">6. Social Contacts</option>
        </select>
      </div>
    </div>

    <br>

    <h4>Segement 1</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day2_trip1_segment1_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day2_trip1_segment1_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day2_trip1_segment1_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day2_trip1_segment1_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day2_trip1_segment1_time">
        </div>   
    </div>

    <br>

    <h4>Segement 2</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day2_trip1_segment2_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day2_trip1_segment2_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day2_trip1_segment2_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day2_trip1_segment2_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day2_trip1_segment2_time">
        </div>   
    </div>

    <br>

    <h4>Segement 3</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day2_trip1_segment3_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day2_trip1_segment3_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day2_trip1_segment3_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day2_trip1_segment3_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day2_trip1_segment3_time">
        </div>   
    </div>

    <br>
    <br>

    <h3>Trip 2</h3>
    <div class="form-group">
      <label class="control-label col-sm-2">Origin:</label>
      <div class="col-sm-2">
        <input class="form-control" placeholder="Origin" name="day2_trip2_origin">
      </div>
      <label class="control-label col-sm-2">Destination:</label>
      <div class="col-sm-2">          
        <input class="form-control" placeholder="Destination" name="day2_trip2_destination">
      </div>
      <label class="control-label col-sm-2">Purpose:</label>
      <div class="col-sm-2">          
        <select class="form-control" placeholder="Purpose" name="day2_trip2_purpose">
        <option></option>
            <option value="1">1. Home</option>
            <option value="2">2. Work</option>
            <option value="3">3. School</option>
            <option value="4">4. Shopping Center/Store/Bazar</option>
            <option value="5">5. Lunch/Dinner</option>
            <option value="6">6. Social Contacts</option>
        </select>
      </div>
    </div>

    <br>

    <h4>Segement 1</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day2_trip2_segment1_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day2_trip2_segment1_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day2_trip2_segment1_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day2_trip2_segment1_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day2_trip2_segment1_time">
        </div>   
    </div>

    <br>

    <h4>Segement 2</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day2_trip2_segment2_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day2_trip2_segment2_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day2_trip2_segment2_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day2_trip2_segment2_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day2_trip2_segment2_time">
        </div>   
    </div>

    <br>

    <h4>Segement 3</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day2_trip2_segment3_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day2_trip2_segment3_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day2_trip2_segment3_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day2_trip2_segment3_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day2_trip2_segment3_time">
        </div>   
    </div>

    <br>
    <br>

    <h3>Trip 3</h3>
    <div class="form-group">
      <label class="control-label col-sm-2">Origin:</label>
      <div class="col-sm-2">
        <input class="form-control" placeholder="Origin;" name="day2_trip3_origin">
      </div>
      <label class="control-label col-sm-2">Destination:</label>
      <div class="col-sm-2">          
        <input class="form-control" placeholder="Destination" name="day2_trip3_destination">
      </div>
      <label class="control-label col-sm-2">Purpose:</label>
      <div class="col-sm-2">          
        <select class="form-control" placeholder="Purpose" name="day2_trip3_purpose">
        <option></option>
            <option value="1">1. Home</option>
            <option value="2">2. Work</option>
            <option value="3">3. School</option>
            <option value="4">4. Shopping Center/Store/Bazar</option>
            <option value="5">5. Lunch/Dinner</option>
            <option value="6">6. Social Contacts</option>
        </select>
      </div>
    </div>

    <br>

    <h4>Segement 1</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day2_trip3_segment1_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day2_trip3_segment1_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day2_trip3_segment1_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day2_trip3_segment1_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day2_trip3_segment1_time">
        </div>   
    </div>

    <br>

    <h4>Segement 2</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day2_trip3_segment2_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day2_trip3_segment2_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day2_trip3_segment2_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day2_trip3_segment2_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day2_trip3_segment2_time">
        </div>   
    </div>

    <br>

    <h4>Segement 3</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day2_trip3_segment3_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day2_trip3_segment3_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day2_trip3_segment3_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day2_trip3_segment3_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day2_trip3_segment3_time">
        </div>   
    </div>

    <br>
    <br>

    <h3>Trip 4</h3>
    <div class="form-group">
      <label class="control-label col-sm-2">Origin:</label>
      <div class="col-sm-2">
        <input class="form-control" placeholder="Origin;" name="day2_trip4_origin">
      </div>
      <label class="control-label col-sm-2">Destination:</label>
      <div class="col-sm-2">          
        <input class="form-control" placeholder="Destination" name="day2_trip4_destination">
      </div>
      <label class="control-label col-sm-2">Purpose:</label>
      <div class="col-sm-2">          
        <select class="form-control" placeholder="Purpose" name="day2_trip4_purpose">
        <option></option>
            <option value="1">1. Home</option>
            <option value="2">2. Work</option>
            <option value="3">3. School</option>
            <option value="4">4. Shopping Center/Store/Bazar</option>
            <option value="5">5. Lunch/Dinner</option>
            <option value="6">6. Social Contacts</option>
        </select>
      </div>
    </div>

    <br>

    <h4>Segement 1</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day2_trip4_segment1_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day2_trip4_segment1_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day2_trip4_segment1_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day2_trip4_segment1_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day2_trip4_segment1_time">
        </div>   
    </div>

    <br>

    <h4>Segement 2</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day2_trip4_segment2_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day2_trip4_segment2_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day2_trip4_segment2_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day2_trip4_segment2_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day2_trip4_segment2_time">
        </div>   
    </div>

    <br>

    <h4>Segement 3</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day2_trip4_segment3_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day2_trip4_segment3_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day2_trip4_segment3_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day2_trip4_segment3_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day2_trip4_segment3_time">
        </div>   
    </div>
    
</div>
<!-- 2. Working day 2 ends -->

<!-- 2. Working day 3 starts -->
<div style="border: 1px solid black; padding:40px;margin:30px">

    <h2 align="center">2. Working Day 3 (Tuesday)</h2>
    <br>
    <br>

    <h3>Trip 1</h3>
    <div class="form-group">
      <label class="control-label col-sm-2">Origin:</label>
      <div class="col-sm-2">
        <input class="form-control" placeholder="Origin" name="day3_trip1_origin">
      </div>
      <label class="control-label col-sm-2">Destination:</label>
      <div class="col-sm-2">          
        <input class="form-control" placeholder="Destination" name="day3_trip1_destination">
      </div>
      <label class="control-label col-sm-2">Purpose:</label>
      <div class="col-sm-2">          
        <select class="form-control" placeholder="Purpose" name="day3_trip1_purpose">
        <option></option>
            <option value="1">1. Home</option>
            <option value="2">2. Work</option>
            <option value="3">3. School</option>
            <option value="4">4. Shopping Center/Store/Bazar</option>
            <option value="5">5. Lunch/Dinner</option>
            <option value="6">6. Social Contacts</option>
        </select>
      </div>
    </div>

    <br>

    <h4>Segement 1</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day3_trip1_segment1_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day3_trip1_segment1_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day3_trip1_segment1_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day3_trip1_segment1_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day3_trip1_segment1_time">
        </div>   
    </div>

    <br>

    <h4>Segement 2</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day3_trip1_segment2_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day3_trip1_segment2_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day3_trip1_segment2_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day3_trip1_segment2_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day3_trip1_segment2_time">
        </div>   
    </div>

    <br>

    <h4>Segement 3</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day3_trip1_segment3_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day3_trip1_segment3_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day3_trip1_segment3_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day3_trip1_segment3_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day3_trip1_segment3_time">
        </div>   
    </div>

    <br>
    <br>

    <h3>Trip 2</h3>
    <div class="form-group">
      <label class="control-label col-sm-2">Origin:</label>
      <div class="col-sm-2">
        <input class="form-control" placeholder="Origin" name="day3_trip2_origin">
      </div>
      <label class="control-label col-sm-2">Destination:</label>
      <div class="col-sm-2">          
        <input class="form-control" placeholder="Destination" name="day3_trip2_destination">
      </div>
      <label class="control-label col-sm-2">Purpose:</label>
      <div class="col-sm-2">          
        <select class="form-control" placeholder="Purpose" name="day3_trip2_purpose">
        <option></option>
            <option value="1">1. Home</option>
            <option value="2">2. Work</option>
            <option value="3">3. School</option>
            <option value="4">4. Shopping Center/Store/Bazar</option>
            <option value="5">5. Lunch/Dinner</option>
            <option value="6">6. Social Contacts</option>
        </select>
      </div>
    </div>

    <br>

    <h4>Segement 1</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day3_trip2_segment1_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day3_trip2_segment1_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day3_trip2_segment1_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day3_trip2_segment1_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day3_trip2_segment1_time">
        </div>   
    </div>

    <br>

    <h4>Segement 2</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day3_trip2_segment2_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day3_trip2_segment2_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day3_trip2_segment2_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day3_trip2_segment2_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day3_trip2_segment2_time">
        </div>   
    </div>

    <br>

    <h4>Segement 3</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day3_trip2_segment3_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day3_trip2_segment3_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day3_trip2_segment3_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day3_trip2_segment3_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day3_trip2_segment3_time">
        </div>   
    </div>

    <br>
    <br>

    <h3>Trip 3</h3>
    <div class="form-group">
      <label class="control-label col-sm-2">Origin:</label>
      <div class="col-sm-2">
        <input class="form-control" placeholder="Origin;" name="day3_trip3_origin">
      </div>
      <label class="control-label col-sm-2">Destination:</label>
      <div class="col-sm-2">          
        <input class="form-control" placeholder="Destination" name="day3_trip3_destination">
      </div>
      <label class="control-label col-sm-2">Purpose:</label>
      <div class="col-sm-2">          
        <select class="form-control" placeholder="Purpose" name="day3_trip3_purpose">
        <option></option>
            <option value="1">1. Home</option>
            <option value="2">2. Work</option>
            <option value="3">3. School</option>
            <option value="4">4. Shopping Center/Store/Bazar</option>
            <option value="5">5. Lunch/Dinner</option>
            <option value="6">6. Social Contacts</option>
        </select>
      </div>
    </div>

    <br>

    <h4>Segement 1</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day3_trip3_segment1_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day3_trip3_segment1_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day3_trip3_segment1_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day3_trip3_segment1_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day3_trip3_segment1_time">
        </div>   
    </div>

    <br>

    <h4>Segement 2</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day3_trip3_segment2_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day3_trip3_segment2_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day3_trip3_segment2_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day3_trip3_segment2_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day3_trip3_segment2_time">
        </div>   
    </div>

    <br>

    <h4>Segement 3</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day3_trip3_segment3_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day3_trip3_segment3_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day3_trip3_segment3_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day3_trip3_segment3_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day3_trip3_segment3_time">
        </div>   
    </div>

    <br>
    <br>

    <h3>Trip 4</h3>
    <div class="form-group">
      <label class="control-label col-sm-2">Origin:</label>
      <div class="col-sm-2">
        <input class="form-control" placeholder="Origin;" name="day3_trip4_origin">
      </div>
      <label class="control-label col-sm-2">Destination:</label>
      <div class="col-sm-2">          
        <input class="form-control" placeholder="Destination" name="day3_trip4_destination">
      </div>
      <label class="control-label col-sm-2">Purpose:</label>
      <div class="col-sm-2">          
        <select class="form-control" placeholder="Purpose" name="day3_trip4_purpose">
        <option></option>
            <option value="1">1. Home</option>
            <option value="2">2. Work</option>
            <option value="3">3. School</option>
            <option value="4">4. Shopping Center/Store/Bazar</option>
            <option value="5">5. Lunch/Dinner</option>
            <option value="6">6. Social Contacts</option>
        </select>
      </div>
    </div>

    <br>

    <h4>Segement 1</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day3_trip4_segment1_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day3_trip4_segment1_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day3_trip4_segment1_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day3_trip4_segment1_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day3_trip4_segment1_time">
        </div>   
    </div>

    <br>

    <h4>Segement 2</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day3_trip4_segment2_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day3_trip4_segment2_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day3_trip4_segment2_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day3_trip4_segment2_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day3_trip4_segment2_time">
        </div>   
    </div>

    <br>

    <h4>Segement 3</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day3_trip4_segment3_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day3_trip4_segment3_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day3_trip4_segment3_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day3_trip4_segment3_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day3_trip4_segment3_time">
        </div>   
    </div>
    
</div>
<!-- 2. Working day 3 ends -->

<!-- 2. Working day 4 starts -->
<div style="border: 1px solid black; padding:40px;margin:30px">

    <h2 align="center">2. Working Day 4 (Wednesday)</h2>
    <br>
    <br>

    <h3>Trip 1</h3>
    <div class="form-group">
      <label class="control-label col-sm-2">Origin:</label>
      <div class="col-sm-2">
        <input class="form-control" placeholder="Origin" name="day4_trip1_origin">
      </div>
      <label class="control-label col-sm-2">Destination:</label>
      <div class="col-sm-2">          
        <input class="form-control" placeholder="Destination" name="day4_trip1_destination">
      </div>
      <label class="control-label col-sm-2">Purpose:</label>
      <div class="col-sm-2">          
        <select class="form-control" placeholder="Purpose" name="day4_trip1_purpose">
        <option></option>
            <option value="1">1. Home</option>
            <option value="2">2. Work</option>
            <option value="3">3. School</option>
            <option value="4">4. Shopping Center/Store/Bazar</option>
            <option value="5">5. Lunch/Dinner</option>
            <option value="6">6. Social Contacts</option>
        </select>
      </div>
    </div>

    <br>

    <h4>Segement 1</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day4_trip1_segment1_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day4_trip1_segment1_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day4_trip1_segment1_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day4_trip1_segment1_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day4_trip1_segment1_time">
        </div>   
    </div>

    <br>

    <h4>Segement 2</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day4_trip1_segment2_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day4_trip1_segment2_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day4_trip1_segment2_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day4_trip1_segment2_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day4_trip1_segment2_time">
        </div>   
    </div>

    <br>

    <h4>Segement 3</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day4_trip1_segment3_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day4_trip1_segment3_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day4_trip1_segment3_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day4_trip1_segment3_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day4_trip1_segment3_time">
        </div>   
    </div>

    <br>
    <br>

    <h3>Trip 2</h3>
    <div class="form-group">
      <label class="control-label col-sm-2">Origin:</label>
      <div class="col-sm-2">
        <input class="form-control" placeholder="Origin" name="day4_trip2_origin">
      </div>
      <label class="control-label col-sm-2">Destination:</label>
      <div class="col-sm-2">          
        <input class="form-control" placeholder="Destination" name="day4_trip2_destination">
      </div>
      <label class="control-label col-sm-2">Purpose:</label>
      <div class="col-sm-2">          
        <select class="form-control" placeholder="Purpose" name="day4_trip2_purpose">
        <option></option>
            <option value="1">1. Home</option>
            <option value="2">2. Work</option>
            <option value="3">3. School</option>
            <option value="4">4. Shopping Center/Store/Bazar</option>
            <option value="5">5. Lunch/Dinner</option>
            <option value="6">6. Social Contacts</option>
        </select>
      </div>
    </div>

    <br>

    <h4>Segement 1</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day4_trip2_segment1_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day4_trip2_segment1_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day4_trip2_segment1_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day4_trip2_segment1_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day4_trip2_segment1_time">
        </div>   
    </div>

    <br>

    <h4>Segement 2</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day4_trip2_segment2_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day4_trip2_segment2_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day4_trip2_segment2_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day4_trip2_segment2_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day4_trip2_segment2_time">
        </div>   
    </div>

    <br>

    <h4>Segement 3</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day4_trip2_segment3_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day4_trip2_segment3_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day4_trip2_segment3_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day4_trip2_segment3_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day4_trip2_segment3_time">
        </div>   
    </div>

    <br>
    <br>

    <h3>Trip 3</h3>
    <div class="form-group">
      <label class="control-label col-sm-2">Origin:</label>
      <div class="col-sm-2">
        <input class="form-control" placeholder="Origin;" name="day4_trip3_origin">
      </div>
      <label class="control-label col-sm-2">Destination:</label>
      <div class="col-sm-2">          
        <input class="form-control" placeholder="Destination" name="day4_trip3_destination">
      </div>
      <label class="control-label col-sm-2">Purpose:</label>
      <div class="col-sm-2">          
        <select class="form-control" placeholder="Purpose" name="day4_trip3_purpose">
        <option></option>
            <option value="1">1. Home</option>
            <option value="2">2. Work</option>
            <option value="3">3. School</option>
            <option value="4">4. Shopping Center/Store/Bazar</option>
            <option value="5">5. Lunch/Dinner</option>
            <option value="6">6. Social Contacts</option>
        </select>
      </div>
    </div>

    <br>

    <h4>Segement 1</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day4_trip3_segment1_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day4_trip3_segment1_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day4_trip3_segment1_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day4_trip3_segment1_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day4_trip3_segment1_time">
        </div>   
    </div>

    <br>

    <h4>Segement 2</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day4_trip3_segment2_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day4_trip3_segment2_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day4_trip3_segment2_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day4_trip3_segment2_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day4_trip3_segment2_time">
        </div>   
    </div>

    <br>

    <h4>Segement 3</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day4_trip3_segment3_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day4_trip3_segment3_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day4_trip3_segment3_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day4_trip3_segment3_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day4_trip3_segment3_time">
        </div>   
    </div>

    <br>
    <br>

    <h3>Trip 4</h3>
    <div class="form-group">
      <label class="control-label col-sm-2">Origin:</label>
      <div class="col-sm-2">
        <input class="form-control" placeholder="Origin;" name="day4_trip4_origin">
      </div>
      <label class="control-label col-sm-2">Destination:</label>
      <div class="col-sm-2">          
        <input class="form-control" placeholder="Destination" name="day4_trip4_destination">
      </div>
      <label class="control-label col-sm-2">Purpose:</label>
      <div class="col-sm-2">          
        <select class="form-control" placeholder="Purpose" name="day4_trip4_purpose">
        <option></option>
            <option value="1">1. Home</option>
            <option value="2">2. Work</option>
            <option value="3">3. School</option>
            <option value="4">4. Shopping Center/Store/Bazar</option>
            <option value="5">5. Lunch/Dinner</option>
            <option value="6">6. Social Contacts</option>
        </select>
      </div>
    </div>

    <br>

    <h4>Segement 1</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day4_trip4_segment1_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day4_trip4_segment1_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day4_trip4_segment1_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day4_trip4_segment1_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day4_trip4_segment1_time">
        </div>   
    </div>

    <br>

    <h4>Segement 2</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day4_trip4_segment2_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day4_trip4_segment2_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day4_trip4_segment2_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day4_trip4_segment2_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day4_trip4_segment2_time">
        </div>   
    </div>

    <br>

    <h4>Segement 3</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day4_trip4_segment3_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day4_trip4_segment3_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day4_trip4_segment3_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day4_trip4_segment3_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day4_trip4_segment3_time">
        </div>   
    </div>
    
</div>
<!-- 2. Working day 4 ends -->

<!-- 2. Working day 5 starts -->
<div style="border: 1px solid black; padding:40px;margin:30px">

    <h2 align="center">2. Working Day 5 (Thursday)</h2>
    <br>
    <br>

    <h3>Trip 1</h3>
    <div class="form-group">
      <label class="control-label col-sm-2">Origin:</label>
      <div class="col-sm-2">
        <input class="form-control" placeholder="Origin" name="day5_trip1_origin">
      </div>
      <label class="control-label col-sm-2">Destination:</label>
      <div class="col-sm-2">          
        <input class="form-control" placeholder="Destination" name="day5_trip1_destination">
      </div>
      <label class="control-label col-sm-2">Purpose:</label>
      <div class="col-sm-2">          
        <select class="form-control" placeholder="Purpose" name="day5_trip1_purpose">
        <option></option>
            <option value="1">1. Home</option>
            <option value="2">2. Work</option>
            <option value="3">3. School</option>
            <option value="4">4. Shopping Center/Store/Bazar</option>
            <option value="5">5. Lunch/Dinner</option>
            <option value="6">6. Social Contacts</option>
        </select>
      </div>
    </div>

    <br>

    <h4>Segement 1</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day5_trip1_segment1_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day5_trip1_segment1_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day5_trip1_segment1_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day5_trip1_segment1_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day5_trip1_segment1_time">
        </div>   
    </div>

    <br>

    <h4>Segement 2</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day5_trip1_segment2_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day5_trip1_segment2_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day5_trip1_segment2_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day5_trip1_segment2_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day5_trip1_segment2_time">
        </div>   
    </div>

    <br>

    <h4>Segement 3</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day5_trip1_segment3_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day5_trip1_segment3_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day5_trip1_segment3_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day5_trip1_segment3_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day5_trip1_segment3_time">
        </div>   
    </div>

    <br>
    <br>

    <h3>Trip 2</h3>
    <div class="form-group">
      <label class="control-label col-sm-2">Origin:</label>
      <div class="col-sm-2">
        <input class="form-control" placeholder="Origin" name="day5_trip2_origin">
      </div>
      <label class="control-label col-sm-2">Destination:</label>
      <div class="col-sm-2">          
        <input class="form-control" placeholder="Destination" name="day5_trip2_destination">
      </div>
      <label class="control-label col-sm-2">Purpose:</label>
      <div class="col-sm-2">          
        <select class="form-control" placeholder="Purpose" name="day5_trip2_purpose">
        <option></option>
            <option value="1">1. Home</option>
            <option value="2">2. Work</option>
            <option value="3">3. School</option>
            <option value="4">4. Shopping Center/Store/Bazar</option>
            <option value="5">5. Lunch/Dinner</option>
            <option value="6">6. Social Contacts</option>
        </select>
      </div>
    </div>

    <br>

    <h4>Segement 1</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day5_trip2_segment1_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day5_trip2_segment1_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day5_trip2_segment1_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day5_trip2_segment1_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day5_trip2_segment1_time">
        </div>   
    </div>

    <br>

    <h4>Segement 2</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day5_trip2_segment2_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day5_trip2_segment2_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day5_trip2_segment2_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day5_trip2_segment2_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day5_trip2_segment2_time">
        </div>   
    </div>

    <br>

    <h4>Segement 3</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day5_trip2_segment3_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day5_trip2_segment3_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day5_trip2_segment3_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day5_trip2_segment3_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day5_trip2_segment3_time">
        </div>   
    </div>

    <br>
    <br>

    <h3>Trip 3</h3>
    <div class="form-group">
      <label class="control-label col-sm-2">Origin:</label>
      <div class="col-sm-2">
        <input class="form-control" placeholder="Origin;" name="day5_trip3_origin">
      </div>
      <label class="control-label col-sm-2">Destination:</label>
      <div class="col-sm-2">          
        <input class="form-control" placeholder="Destination" name="day5_trip3_destination">
      </div>
      <label class="control-label col-sm-2">Purpose:</label>
      <div class="col-sm-2">          
        <select class="form-control" placeholder="Purpose" name="day5_trip3_purpose">
        <option></option>
            <option value="1">1. Home</option>
            <option value="2">2. Work</option>
            <option value="3">3. School</option>
            <option value="4">4. Shopping Center/Store/Bazar</option>
            <option value="5">5. Lunch/Dinner</option>
            <option value="6">6. Social Contacts</option>
        </select>
      </div>
    </div>

    <br>

    <h4>Segement 1</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day5_trip3_segment1_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day5_trip3_segment1_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day5_trip3_segment1_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day5_trip3_segment1_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day5_trip3_segment1_time">
        </div>   
    </div>

    <br>

    <h4>Segement 2</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day5_trip3_segment2_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day5_trip3_segment2_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day5_trip3_segment2_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day5_trip3_segment2_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day5_trip3_segment2_time">
        </div>   
    </div>

    <br>

    <h4>Segement 3</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day5_trip3_segment3_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day5_trip3_segment3_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day5_trip3_segment3_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day5_trip3_segment3_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day5_trip3_segment3_time">
        </div>   
    </div>

    <br>
    <br>

    <h3>Trip 4</h3>
    <div class="form-group">
      <label class="control-label col-sm-2">Origin:</label>
      <div class="col-sm-2">
        <input class="form-control" placeholder="Origin;" name="day5_trip4_origin">
      </div>
      <label class="control-label col-sm-2">Destination:</label>
      <div class="col-sm-2">          
        <input class="form-control" placeholder="Destination" name="day5_trip4_destination">
      </div>
      <label class="control-label col-sm-2">Purpose:</label>
      <div class="col-sm-2">          
        <select class="form-control" placeholder="Purpose" name="day5_trip4_purpose">
        <option></option>
            <option value="1">1. Home</option>
            <option value="2">2. Work</option>
            <option value="3">3. School</option>
            <option value="4">4. Shopping Center/Store/Bazar</option>
            <option value="5">5. Lunch/Dinner</option>
            <option value="6">6. Social Contacts</option>
        </select>
      </div>
    </div>

    <br>

    <h4>Segement 1</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day5_trip4_segment1_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day5_trip4_segment1_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day5_trip4_segment1_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day5_trip4_segment1_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day5_trip4_segment1_time">
        </div>   
    </div>

    <br>

    <h4>Segement 2</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day5_trip4_segment2_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day5_trip4_segment2_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day5_trip4_segment2_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day5_trip4_segment2_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day5_trip4_segment2_time">
        </div>   
    </div>

    <br>

    <h4>Segement 3</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day5_trip4_segment3_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day5_trip4_segment3_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day5_trip4_segment3_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day5_trip4_segment3_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day5_trip4_segment3_time">
        </div>   
    </div>
    
</div>
<!-- 2. Working day 5 ends -->

<!-- 2. Working day 6 starts -->
<div style="border: 1px solid black; padding:40px;margin:30px">

    <h2 align="center">Weekend Day 6 (Friday)</h2>
    <br>
    <br>

    <h3>Trip 1</h3>
    <div class="form-group">
      <label class="control-label col-sm-2">Origin:</label>
      <div class="col-sm-2">
        <input class="form-control" placeholder="Origin" name="day6_trip1_origin">
      </div>
      <label class="control-label col-sm-2">Destination:</label>
      <div class="col-sm-2">          
        <input class="form-control" placeholder="Destination" name="day6_trip1_destination">
      </div>
      <label class="control-label col-sm-2">Purpose:</label>
      <div class="col-sm-2">          
        <select class="form-control" placeholder="Purpose" name="day6_trip1_purpose">
        <option></option>
            <option value="1">1. Home</option>
            <option value="2">2. Work</option>
            <option value="3">3. School</option>
            <option value="4">4. Shopping Center/Store/Bazar</option>
            <option value="5">5. Lunch/Dinner</option>
            <option value="6">6. Social Contacts</option>
        </select>
      </div>
    </div>

    <br>

    <h4>Segement 1</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day6_trip1_segment1_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day6_trip1_segment1_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day6_trip1_segment1_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day6_trip1_segment1_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day6_trip1_segment1_time">
        </div>   
    </div>

    <br>

    <h4>Segement 2</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day6_trip1_segment2_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day6_trip1_segment2_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day6_trip1_segment2_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day6_trip1_segment2_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day6_trip1_segment2_time">
        </div>   
    </div>

    <br>

    <h4>Segement 3</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day6_trip1_segment3_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day6_trip1_segment3_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day6_trip1_segment3_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day6_trip1_segment3_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day6_trip1_segment3_time">
        </div>   
    </div>

    <br>
    <h3>Reverse Trip 1 to trip 2 . . .</h3>
    <div class="checkbox">
      <label><input id="revereseDay6Trip1ToTrip2" type="checkbox">Reverse Trip 1 to trip 2</label>
    </div>
    <br>

    <h3>Trip 2</h3>
    <div class="form-group">
      <label class="control-label col-sm-2">Origin:</label>
      <div class="col-sm-2">
        <input class="form-control" placeholder="Origin" name="day6_trip2_origin">
      </div>
      <label class="control-label col-sm-2">Destination:</label>
      <div class="col-sm-2">          
        <input class="form-control" placeholder="Destination" name="day6_trip2_destination">
      </div>
      <label class="control-label col-sm-2">Purpose:</label>
      <div class="col-sm-2">          
        <select class="form-control" placeholder="Purpose" name="day6_trip2_purpose">
        <option></option>
            <option value="1">1. Home</option>
            <option value="2">2. Work</option>
            <option value="3">3. School</option>
            <option value="4">4. Shopping Center/Store/Bazar</option>
            <option value="5">5. Lunch/Dinner</option>
            <option value="6">6. Social Contacts</option>
        </select>
      </div>
    </div>

    <br>

    <h4>Segement 1</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day6_trip2_segment1_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day6_trip2_segment1_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day6_trip2_segment1_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day6_trip2_segment1_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day6_trip2_segment1_time">
        </div>   
    </div>

    <br>

    <h4>Segement 2</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day6_trip2_segment2_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day6_trip2_segment2_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day6_trip2_segment2_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day6_trip2_segment2_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day6_trip2_segment2_time">
        </div>   
    </div>

    <br>

    <h4>Segement 3</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day6_trip2_segment3_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day6_trip2_segment3_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day6_trip2_segment3_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day6_trip2_segment3_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day6_trip2_segment3_time">
        </div>   
    </div>

    <br>
    <br>

    <h3>Trip 3</h3>
    <div class="form-group">
      <label class="control-label col-sm-2">Origin:</label>
      <div class="col-sm-2">
        <input class="form-control" placeholder="Origin;" name="day6_trip3_origin">
      </div>
      <label class="control-label col-sm-2">Destination:</label>
      <div class="col-sm-2">          
        <input class="form-control" placeholder="Destination" name="day6_trip3_destination">
      </div>
      <label class="control-label col-sm-2">Purpose:</label>
      <div class="col-sm-2">          
        <select class="form-control" placeholder="Purpose" name="day6_trip3_purpose">
        <option></option>
            <option value="1">1. Home</option>
            <option value="2">2. Work</option>
            <option value="3">3. School</option>
            <option value="4">4. Shopping Center/Store/Bazar</option>
            <option value="5">5. Lunch/Dinner</option>
            <option value="6">6. Social Contacts</option>
        </select>
      </div>
    </div>

    <br>

    <h4>Segement 1</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day6_trip3_segment1_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day6_trip3_segment1_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day6_trip3_segment1_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day6_trip3_segment1_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day6_trip3_segment1_time">
        </div>   
    </div>

    <br>

    <h4>Segement 2</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day6_trip3_segment2_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day6_trip3_segment2_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day6_trip3_segment2_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day6_trip3_segment2_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day6_trip3_segment2_time">
        </div>   
    </div>

    <br>

    <h4>Segement 3</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day6_trip3_segment3_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day6_trip3_segment3_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day6_trip3_segment3_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day6_trip3_segment3_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day6_trip3_segment3_time">
        </div>   
    </div>

    <br>
    <br>

    <h3>Trip 4</h3>
    <div class="form-group">
      <label class="control-label col-sm-2">Origin:</label>
      <div class="col-sm-2">
        <input class="form-control" placeholder="Origin;" name="day6_trip4_origin">
      </div>
      <label class="control-label col-sm-2">Destination:</label>
      <div class="col-sm-2">          
        <input class="form-control" placeholder="Destination" name="day6_trip4_destination">
      </div>
      <label class="control-label col-sm-2">Purpose:</label>
      <div class="col-sm-2">          
        <select class="form-control" placeholder="Purpose" name="day6_trip4_purpose">
        <option></option>
            <option value="1">1. Home</option>
            <option value="2">2. Work</option>
            <option value="3">3. School</option>
            <option value="4">4. Shopping Center/Store/Bazar</option>
            <option value="5">5. Lunch/Dinner</option>
            <option value="6">6. Social Contacts</option>
        </select>
      </div>
    </div>

    <br>

    <h4>Segement 1</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day6_trip4_segment1_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day6_trip4_segment1_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day6_trip4_segment1_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day6_trip4_segment1_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day6_trip4_segment1_time">
        </div>   
    </div>

    <br>

    <h4>Segement 2</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day6_trip4_segment2_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day6_trip4_segment2_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day6_trip4_segment2_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day6_trip4_segment2_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day6_trip4_segment2_time">
        </div>   
    </div>

    <br>

    <h4>Segement 3</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day6_trip4_segment3_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day6_trip4_segment3_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day6_trip4_segment3_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day6_trip4_segment3_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day6_trip4_segment3_time">
        </div>   
    </div>
    
</div>
<!-- 2. Working day 5 ends -->

    <div class="checkbox">
      <label><input id="day6Today7trip1" type="checkbox">day 7 trip 1</label>
      <label><input id="day6Today7trip2" type="checkbox">day 7 trip 2</label>
      <label><input id="day6Today7trip3" type="checkbox">day 7 trip 3</label>
      <label><input id="day6Today7trip4" type="checkbox">day 7 trip 4</label>
    </div>

<!-- 2. Working day 7 starts -->
<div style="border: 1px solid black; padding:40px;margin:30px">

    <h2 align="center">Weekend Day 7 (Saturday)</h2>
    <br>
    <br>

    <h3>Trip 1</h3>
    <div class="form-group">
      <label class="control-label col-sm-2">Origin:</label>
      <div class="col-sm-2">
        <input class="form-control" placeholder="Origin" name="day7_trip1_origin">
      </div>
      <label class="control-label col-sm-2">Destination:</label>
      <div class="col-sm-2">          
        <input class="form-control" placeholder="Destination" name="day7_trip1_destination">
      </div>
      <label class="control-label col-sm-2">Purpose:</label>
      <div class="col-sm-2">          
        <select class="form-control" placeholder="Purpose" name="day7_trip1_purpose">
        <option></option>
            <option value="1">1. Home</option>
            <option value="2">2. Work</option>
            <option value="3">3. School</option>
            <option value="4">4. Shopping Center/Store/Bazar</option>
            <option value="5">5. Lunch/Dinner</option>
            <option value="6">6. Social Contacts</option>
        </select>
      </div>
    </div>

    <br>

    <h4>Segement 1</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day7_trip1_segment1_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day7_trip1_segment1_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day7_trip1_segment1_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day7_trip1_segment1_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day7_trip1_segment1_time">
        </div>   
    </div>

    <br>

    <h4>Segement 2</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day7_trip1_segment2_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day7_trip1_segment2_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day7_trip1_segment2_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day7_trip1_segment2_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day7_trip1_segment2_time">
        </div>   
    </div>

    <br>

    <h4>Segement 3</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day7_trip1_segment3_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day7_trip1_segment3_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day7_trip1_segment3_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day7_trip1_segment3_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day7_trip1_segment3_time">
        </div>   
    </div>

    <br>
    <br>

    <h3>Trip 2</h3>
    <div class="form-group">
      <label class="control-label col-sm-2">Origin:</label>
      <div class="col-sm-2">
        <input class="form-control" placeholder="Origin" name="day7_trip2_origin">
      </div>
      <label class="control-label col-sm-2">Destination:</label>
      <div class="col-sm-2">          
        <input class="form-control" placeholder="Destination" name="day7_trip2_destination">
      </div>
      <label class="control-label col-sm-2">Purpose:</label>
      <div class="col-sm-2">          
        <select class="form-control" placeholder="Purpose" name="day7_trip2_purpose">
        <option></option>
            <option value="1">1. Home</option>
            <option value="2">2. Work</option>
            <option value="3">3. School</option>
            <option value="4">4. Shopping Center/Store/Bazar</option>
            <option value="5">5. Lunch/Dinner</option>
            <option value="6">6. Social Contacts</option>
        </select>
      </div>
    </div>

    <br>

    <h4>Segement 1</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day7_trip2_segment1_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day7_trip2_segment1_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day7_trip2_segment1_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day7_trip2_segment1_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day7_trip2_segment1_time">
        </div>   
    </div>

    <br>

    <h4>Segement 2</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day7_trip2_segment2_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day7_trip2_segment2_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day7_trip2_segment2_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day7_trip2_segment2_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day7_trip2_segment2_time">
        </div>   
    </div>

    <br>

    <h4>Segement 3</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day7_trip2_segment3_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day7_trip2_segment3_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day7_trip2_segment3_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day7_trip2_segment3_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day7_trip2_segment3_time">
        </div>   
    </div>

    <br>
    <br>

    <h3>Trip 3</h3>
    <div class="form-group">
      <label class="control-label col-sm-2">Origin:</label>
      <div class="col-sm-2">
        <input class="form-control" placeholder="Origin;" name="day7_trip3_origin">
      </div>
      <label class="control-label col-sm-2">Destination:</label>
      <div class="col-sm-2">          
        <input class="form-control" placeholder="Destination" name="day7_trip3_destination">
      </div>
      <label class="control-label col-sm-2">Purpose:</label>
      <div class="col-sm-2">          
        <select class="form-control" placeholder="Purpose" name="day7_trip3_purpose">
        <option></option>
            <option value="1">1. Home</option>
            <option value="2">2. Work</option>
            <option value="3">3. School</option>
            <option value="4">4. Shopping Center/Store/Bazar</option>
            <option value="5">5. Lunch/Dinner</option>
            <option value="6">6. Social Contacts</option>
        </select>
      </div>
    </div>

    <br>

    <h4>Segement 1</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day7_trip3_segment1_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day7_trip3_segment1_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day7_trip3_segment1_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day7_trip3_segment1_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day7_trip3_segment1_time">
        </div>   
    </div>

    <br>

    <h4>Segement 2</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day7_trip3_segment2_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day7_trip3_segment2_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day7_trip3_segment2_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day7_trip3_segment2_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day7_trip3_segment2_time">
        </div>   
    </div>

    <br>

    <h4>Segement 3</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day7_trip3_segment3_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day7_trip3_segment3_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day7_trip3_segment3_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day7_trip3_segment3_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day7_trip3_segment3_time">
        </div>   
    </div>

    <br>
    <br>

    <h3>Trip 4</h3>
    <div class="form-group">
      <label class="control-label col-sm-2">Origin:</label>
      <div class="col-sm-2">
        <input class="form-control" placeholder="Origin;" name="day7_trip4_origin">
      </div>
      <label class="control-label col-sm-2">Destination:</label>
      <div class="col-sm-2">          
        <input class="form-control" placeholder="Destination" name="day7_trip4_destination">
      </div>
      <label class="control-label col-sm-2">Purpose:</label>
      <div class="col-sm-2">          
        <select class="form-control" placeholder="Purpose" name="day7_trip4_purpose">
        <option></option>
            <option value="1">1. Home</option>
            <option value="2">2. Work</option>
            <option value="3">3. School</option>
            <option value="4">4. Shopping Center/Store/Bazar</option>
            <option value="5">5. Lunch/Dinner</option>
            <option value="6">6. Social Contacts</option>
        </select>
      </div>
    </div>

    <br>

    <h4>Segement 1</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day7_trip4_segment1_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day7_trip4_segment1_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day7_trip4_segment1_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day7_trip4_segment1_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day7_trip4_segment1_time">
        </div>   
    </div>

    <br>

    <h4>Segement 2</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day7_trip4_segment2_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day7_trip4_segment2_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day7_trip4_segment2_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day7_trip4_segment2_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day7_trip4_segment2_time">
        </div>   
    </div>

    <br>

    <h4>Segement 3</h4>
    <div class="form-group">
        <label class="control-label col-sm-1">Mode:</label>
        <div class="col-sm-2">          
        <select class="form-control" placeholder="Mode" name="day7_trip4_segment3_mode">
        <option></option>
            <option value="1">1. On Foot</option>
            <option value="2">2. Bicycle</option>
            <option value="3">3. Rickshaw</option>
            <option value="4">4. Motorcycle</option>
            <option value="5">5. Car</option>
            <option value="6">6. Taxi Cab</option>
            <option value="7">7. CNG/Auto Rickshaw</option>
            <option value="8">8. Jeep</option>
            <option value="9">9. Microbus</option>
            <option value="10">10. Bus</option>
            <option value="11">11. Human Hauler</option>
            <option value="12">12. Pickup</option>
            <option value="13">13. Uber</option>
            <option value="14">14. Pathao</option>
        </select>
        </div>
        <label class="control-label col-sm-1">Distance:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Distance" name="day7_trip4_segment3_distance">
        </div>
        <label class="control-label col-sm-1">Duration:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Duration" name="day7_trip4_segment3_duration">
        </div>
        <label class="control-label col-sm-1">Cost:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Cost" name="day7_trip4_segment3_cost">
        </div>
        <label class="control-label col-sm-1">Time:</label>
        <div class="col-sm-1">
            <input class="form-control" placeholder="Time" name="day7_trip4_segment3_time">
        </div>   
    </div>
    
</div>
<!-- 2. Working day 7 ends -->



    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
