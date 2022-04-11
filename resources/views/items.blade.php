@extends('layouts.app')

@section('title-block')
VIEW
@endsection


@section('content')
<H1 class="view-title-table">PRODUCTS:</H1>

  <table>

    <tr>
      <td class="td-title">ID</td>
      <td class="td-title">TITLE</td>
      <td class="td-title">DESCRIPTION</td>
      <td class="td-title">PRICE</td>
      <td class="td-title">CREATED_AT</td>
      <td class="td-title">UPDATED_AT</td>
      <td class="td-title">ACTIONS</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <div class="buttons">
          <button data-easy-toggle="#win" data-easy-class="show" class="button-view"><img class="edit-icon" src="https://cdn-icons-png.flaticon.com/512/1159/1159633.png" alt=""></a></button>
          <button class="button-view"><img class="delete-icon" src="https://cdn-icons-png.flaticon.com/512/1214/1214428.png" alt=""></a></button>

        </div>
      </td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <div class="buttons">

          <button data-easy-toggle="#win" data-easy-class="show" class="button-view"><img class="edit-icon" src="https://cdn-icons-png.flaticon.com/512/1159/1159633.png" alt=""></a></button>
          <button class="button-view"><img class="delete-icon" src="https://cdn-icons-png.flaticon.com/512/1214/1214428.png" alt=""></a></button>

        </div>
      </td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <div class="buttons">

          <button data-easy-toggle="#win" data-easy-class="show" class="button-view"><img class="edit-icon" src="https://cdn-icons-png.flaticon.com/512/1159/1159633.png" alt=""></a></button>
          <button class="button-view"><img class="delete-icon" src="https://cdn-icons-png.flaticon.com/512/1214/1214428.png" alt=""></a></button>

        </div>
      </td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <div class="buttons">

          <button data-easy-toggle="#win" data-easy-class="show" class="button-view"><img class="edit-icon" src="https://cdn-icons-png.flaticon.com/512/1159/1159633.png" alt=""></a></button>
          <button class="button-view"><img class="delete-icon" src="https://cdn-icons-png.flaticon.com/512/1214/1214428.png" alt=""></a></button>

        </div>
      </td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <div class="buttons">

          <button data-easy-toggle="#win" data-easy-class="show" class="button-view"><img class="edit-icon" src="https://cdn-icons-png.flaticon.com/512/1159/1159633.png" alt=""></a></button>
          <button class="button-view"><img class="delete-icon" src="https://cdn-icons-png.flaticon.com/512/1214/1214428.png" alt=""></a></button>

        </div>
      </td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <div class="buttons">

          <button data-easy-toggle="#win" data-easy-class="show" class="button-view"><img class="edit-icon" src="https://cdn-icons-png.flaticon.com/512/1159/1159633.png" alt=""></a></button>
          <button class="button-view"><img class="delete-icon" src="https://cdn-icons-png.flaticon.com/512/1214/1214428.png" alt=""></a></button>

        </div>
      </td>
    </tr>

  </table>




  <div id="win" class="mod-wind-edit">
    <div class="wind-edit">
      <h2 class="edit">EDIT</h2>
      <form class="edit-form" method="get">
        <label class="edit" for="title">Title:</label>
        <input type="text" id="ttl" name="ttl"><br><br>
        <label class="edit" for="description">Edit the description here:</label>
        <input class="desc-area" type="text" id="desc" name="desc"><br><br>
        <label class="edit" for="price">New price:</label>
        <input type="text" id="prc" name="prc"><br><br>
        <input type="submit" value="Submit">
        <button class="btn-close">X</button>
    </div>
    <div data-easy-toggle="#win" data-easy-class="show" class="overlay"></div>
    </form>
  </div>



  <div class="edit-btn">


    <button data-easy-toggle="#win-1" data-easy-class="show" class="button-view"><img class="edit-icon" src="https://cdn-icons.flaticon.com/png/512/5881/premium/5881133.png?token=exp=1649242254~hmac=7f47e21f71569fd2d135fd071638c308" alt=""></a></button>
  </div>


  <div id="win-1" class="mod-wind-edit-1">
    <div class="wind-edit-1">
      <h2 class="edit">CREATE</h2>
      <form class="edit-form" method="get">
        <label class="edit" for="title">Title:</label>
        <input type="text" id="ttl" name="ttl"><br><br>
        <label class="edit" for="description">Describe the product here:</label>
        <input class="desc-area" type="text" id="desc" name="desc"><br><br>
        <label class="edit" for="price"> price:</label>
        <input type="text" id="prc" name="prc"><br><br>
        <input type="submit" value="Submit">
        <button class="btn-close">X</button>
    </div>
    <div data-easy-toggle="#win-1" data-easy-class="show" class="overlay"></div>
    </form>
  </div>

  <script>
    /**
     * EasyToggler 1.2.0
     * Simple class switcher on web elements. JavaScript only.
     * GitHub: https://github.com/rah-emil/easy-toggler
     *
     * Copyright 2020 Rah Emil
     *
     * Released under the MIT License
     *
     * Released: July 21, 2020
     * Latest updates: July 21, 2021
     */

    ! function() {
      "use strict";
      document.addEventListener("click", function(t) {
        const e = t.target.closest("[data-easy-toggle]");
        if (e) {
          t.preventDefault();
          let a = e.getAttribute("data-easy-toggle"),
            s = e.getAttribute("data-easy-class");
          try {
            document.querySelectorAll("[data-easy-toggle]").forEach(t => {
              t.hasAttribute("data-easy-parallel") || t === e || document.querySelector(t.getAttribute("data-easy-toggle")).classList.remove(t.getAttribute("data-easy-class"))
            }), document.querySelector(a).classList.toggle(s)
          } catch (t) {
            console.warn("EasyToggler.js : Блок " + a + " не существует")
          }
        }
        if (!e) {
          let e = document.querySelectorAll("[data-easy-rcoe]");
          Array.from(e).forEach.call(e, function(e) {
            let a = e.getAttribute("data-easy-toggle"),
              s = e.getAttribute("data-easy-class");
            if (!t.target.closest(a)) try {
              document.querySelector(a).classList.remove(s)
            } catch (t) {
              console.warn("EasyToggler.js : Блок " + a + " не существует")
            }
          })
        }
      })
    }();
  </script>
@endsection