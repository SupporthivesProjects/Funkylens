<?php include 'includes/header.php'; ?>

<section class="search_img">
  <div class="container px-0">
    <div class="top_sec">
      <h4 class="bold_img">
        Browse images
      </h4>
      <div class="filter_box">
        <div class="searchii">
          <input class='input  seacrh_impu search-js' type="search" id="searchbox" placeholder="Start typing here... ">
          <img src="./img/search.svg" alt="" class="ser_ico">
        </div>

        <!-- SORT BOX -->

        <div class="d-none d-md-block d-lg-block ">
          <span class="sort_box_d">
            <label for="s-result-sort-select" class="a-native-dropdown so_grey  ">Sort by</label>
            <select name="sort_by_date" onchange="this.form.submit()" id="sources" class="custom-select sources"
              placeholder="Date">
              <option value="all" @if($sort_by_date=="all" ) selected @endif> Date</option>
              <option value="latest" @if($sort_by_date=="latest" ) selected @endif> Latest</option>
              <option value="old" @if($sort_by_date=="old" ) selected @endif> Old</option>
            </select>
          </span>
        </div>

        <div class="d-none d-md-block d-lg-block ">
          <span class="sort_box_d" style="max-width: 100%;">
            <label for="s-result-sort-select" class="a-native-dropdown so_grey  ">Orientation</label>
            <select name="sort_by_orientation" onchange="this.form.submit()" id="sources" class="custom-select sources"
              placeholder="All">
              <option value="all" @if($sort_by_orientation=='all' ) selected @endif>ALL</option>
              <option value="landscape" @if($sort_by_orientation=='landscape' ) selected @endif> Landscape
              </option>
              <option value="portrait" @if($sort_by_orientation=='portrait' ) selected @endif> Portrait</option>
            </select>
          </span>
        </div>

        <!-- TAB BTNS -->

        <!-- Desktop None -->
        <div class="d-block d-md-none d-lg-none">

          <div class="tags_div mobile_tags_wrapper">

            <ul class="nav nav-pills tab_link mobile_tags" id="pills-tab" role="tablist">

              <!-- VISIBLE TAGS -->

              <li class="nav-item" role="presentation">
                <button class="nav-link btn_grey_2 active" data-bs-toggle="pill" data-bs-target="#pills-home"
                  type="button">
                  Nature
                </button>
              </li>

              <li class="nav-item" role="presentation">
                <button class="nav-link btn_grey_2" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button">
                  Business
                </button>
              </li>

              <li class="nav-item" role="presentation">
                <button class="nav-link btn_grey_2" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button">
                  People
                </button>
              </li>

              <li class="nav-item" role="presentation">
                <button class="nav-link btn_grey_2" type="button">
                  Animals
                </button>
              </li>

              <li class="nav-item" role="presentation">
                <button class="nav-link btn_grey_2" type="button">
                  Toys
                </button>
              </li>

              <li class="nav-item" role="presentation">
                <button class="nav-link btn_grey_2" type="button">
                  Sky
                </button>
              </li>

              <li class="nav-item" role="presentation">
                <button class="nav-link btn_grey_2" type="button">
                  Tech
                </button>
              </li>

              <!-- HIDDEN TAGS -->

              <div class="more_tags" id="moreTags">

                <li class="nav-item">
                  <button class="nav-link btn_grey_2">Groups</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link btn_grey_2">Travel</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link btn_grey_2">Summer</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link btn_grey_2">Buildings</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link btn_grey_2">Food</button>
                </li>

              </div>

            </ul>

            <!-- SHOW MORE -->

            <div class="show_more_wrap">

              <button class="show_more_btn" id="showMoreBtn">

                Show More...

                <img src="./img/arrow_drop_down2.svg" alt="">

              </button>

            </div>

          </div>

        </div>

        <!-- Mobile None -->
        <div class="tags_div d-none d-md-block d-lg-block">
          <ul class="nav nav-pills tab_link" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2 active" id="pills-home-tab" data-bs-toggle="pill"
                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                aria-selected="true">Nature</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-profile-tab" data-bs-toggle="pill"
                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                aria-selected="false">business</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">people</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">animals</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">toys</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">sky</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">tech</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">groups</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">travel</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">summer</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">buildings</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">food</button>
            </li>
            <!-- 2nd Row -->
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                type="button" role="tab" aria-controls="pills-home" aria-selected="true">Nature</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-profile-tab" data-bs-toggle="pill"
                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                aria-selected="false">business</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">people</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">animals</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">toys</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">sky</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">tech</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">groups</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">travel</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">summer</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">buildings</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">food</button>
            </li>

            <!-- 3rd Row -->

            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                type="button" role="tab" aria-controls="pills-home" aria-selected="true">Nature</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-profile-tab" data-bs-toggle="pill"
                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                aria-selected="false">business</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">people</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">animals</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">toys</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">sky</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">tech</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">groups</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">travel</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">summer</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">buildings</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link btn_grey_2" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">food</button>
            </li>
          </ul>
        </div>
      </div>
    </div>
</section>
<section class="search_img_box">
  <div class="container px-0">
    <div class="bottom_sec">
      <div class="filtered-results" style="display: none;"></div> <!-- New line for filtered results count -->
      <!-- Desktop None -->
      <div class="mob_select">

        <!-- SORT BY -->
        <div class="d-block d-md-none d-lg-none w-100">
          <span class="sort_box_d">

            <label class="a-native-dropdown so_grey">
              Sort by
            </label>

            <select name="sort_by_date" onchange="this.form.submit()" id="sort-date" class="custom-select sources"
              placeholder="Date">

              <option value="all" @if($sort_by_date=="all" ) selected @endif>
                Date
              </option>

              <option value="latest" @if($sort_by_date=="latest" ) selected @endif>
                Latest
              </option>

              <option value="old" @if($sort_by_date=="old" ) selected @endif>
                Old
              </option>

            </select>

          </span>
        </div>

        <!-- ORIENTATION -->
        <div class="d-block d-md-none d-lg-none w-100">

          <span class="sort_box_d" style="max-width:100%;">

            <label class="a-native-dropdown so_grey">
              Orientation
            </label>

            <select name="sort_by_orientation" onchange="this.form.submit()" id="sort-orientation"
              class="custom-select sources" placeholder="All">

              <option value="all" @if($sort_by_orientation=='all' ) selected @endif>
                ALL
              </option>

              <option value="landscape" @if($sort_by_orientation=='landscape' ) selected @endif>
                Landscape
              </option>

              <option value="portrait" @if($sort_by_orientation=='portrait' ) selected @endif>
                Portrait
              </option>

              <option value="hello">
                Hello
              </option>

              <option value="hey">
                Hey
              </option>

            </select>

          </span>

        </div>

      </div>
      <!-- //// -->
      <div class="search-results">
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
            tabindex="0">
            <div class="flex-container">
              <div class="image-box">
                <img class='image img-fluid' src="./img/1.png" alt="walking at harbour" />
                <img src="./img/remove_red_eye.svg" alt="" class="red_ee">
              </div>

              <div class="image-box">
                <img class='image img-fluid' src="./img/2.png" width="100%" alt="high five with human" />
                <img src="./img/remove_red_eye.svg" alt="" class="red_ee">

              </div>
              <div class="image-box">
                <img class='image img-fluid' src="./img/3.png" width="100%" alt="snow on the grass" />
                <img src="./img/remove_red_eye.svg" alt="" class="red_ee">

              </div>
              <div class="image-box">
                <img class='image img-fluid' src="./img/4.png" width="100%" alt="butterfly on my nouse" />
                <img src="./img/remove_red_eye.svg" alt="" class="red_ee">

              </div>
              <div class="image-box">
                <img class='image img-fluid' src="./img/5.png" width="100%" alt="chillin on the chair" />
                <img src="./img/remove_red_eye.svg" alt="" class="red_ee">

              </div>
              <div class="image-box">
                <img class='image img-fluid' src="./img/6.png" width="100%" alt="kitten is confused" />
                <img src="./img/remove_red_eye.svg" alt="" class="red_ee">

              </div>
              <div class="image-box">
                <img class='image img-fluid' src="./img/7.png" width="100%"
                  alt="staring at human, sitting on top of table" />
                <img src="./img/remove_red_eye.svg" alt="" class="red_ee">

              </div>
              <div class="image-box">
                <img class='image img-fluid' src="./img/8.png" width="100%" alt="cute kitten on bed" />
                <img src="./img/remove_red_eye.svg" alt="" class="red_ee">

              </div>
              <div class="image-box">
                <img class='image img-fluid' src="./img/9.png" width="100%" alt="cute kitten under the blanker" />
                <img src="./img/remove_red_eye.svg" alt="" class="red_ee">

              </div>

            </div>
          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
            tabindex="0">
            <div class="flex-container search-results">
              <div class="image-box">
                <img class='image img-fluid' src="./img/1.png" alt="walking at harbour" />
                <img src="./img/remove_red_eye.svg" alt="" class="red_ee">
              </div>

              <div class="image-box">
                <img class='image img-fluid' src="./img/2.png" width="100%" alt="high five with human" />
                <img src="./img/remove_red_eye.svg" alt="" class="red_ee">

              </div>
              <div class="image-box">
                <img class='image img-fluid' src="./img/3.png" width="100%" alt="snow on the grass" />
                <img src="./img/remove_red_eye.svg" alt="" class="red_ee">

              </div>
              <div class="image-box">
                <img class='image img-fluid' src="./img/4.png" width="100%" alt="butterfly on my nouse" />
                <img src="./img/remove_red_eye.svg" alt="" class="red_ee">

              </div>
              <div class="image-box">
                <img class='image img-fluid' src="./img/5.png" width="100%" alt="chillin on the chair" />
                <img src="./img/remove_red_eye.svg" alt="" class="red_ee">

              </div>
              <div class="image-box">
                <img class='image img-fluid' src="./img/6.png" width="100%" alt="kitten is confused" />
                <img src="./img/remove_red_eye.svg" alt="" class="red_ee">

              </div>
              <div class="image-box">
                <img class='image img-fluid' src="./img/7.png" width="100%"
                  alt="staring at human, sitting on top of table" />
                <img src="./img/remove_red_eye.svg" alt="" class="red_ee">

              </div>
              <div class="image-box">
                <img class='image img-fluid' src="./img/8.png" width="100%" alt="cute kitten on bed" />
                <img src="./img/remove_red_eye.svg" alt="" class="red_ee">

              </div>
              <div class="image-box">
                <img class='image img-fluid' src="./img/9.png" width="100%" alt="cute kitten under the blanker" />
                <img src="./img/remove_red_eye.svg" alt="" class="red_ee">

              </div>

            </div>
          </div>
          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
            tabindex="0">
            <div class="flex-container">
              <div class="image-box">
                <img class='image img-fluid' src="./img/2.png" alt="walking at harbour" />
                <img src="./img/remove_red_eye.svg" alt="" class="red_ee">
              </div>

              <div class="image-box">
                <img class='image img-fluid' src="./img/1.png" width="100%" alt="high five with human" />
                <img src="./img/remove_red_eye.svg" alt="" class="red_ee">

              </div>
              <div class="image-box">
                <img class='image img-fluid' src="./img/3.png" width="100%" alt="snow on the grass" />
                <img src="./img/remove_red_eye.svg" alt="" class="red_ee">

              </div>
              <div class="image-box">
                <img class='image img-fluid' src="./img/4.png" width="100%" alt="butterfly on my nouse" />
                <img src="./img/remove_red_eye.svg" alt="" class="red_ee">

              </div>
              <div class="image-box">
                <img class='image img-fluid' src="./img/5.png" width="100%" alt="chillin on the chair" />
                <img src="./img/remove_red_eye.svg" alt="" class="red_ee">

              </div>
              <div class="image-box">
                <img class='image img-fluid' src="./img/6.png" width="100%" alt="kitten is confused" />
                <img src="./img/remove_red_eye.svg" alt="" class="red_ee">

              </div>
              <div class="image-box">
                <img class='image img-fluid' src="./img/7.png" width="100%"
                  alt="staring at human, sitting on top of table" />
                <img src="./img/remove_red_eye.svg" alt="" class="red_ee">

              </div>
              <div class="image-box">
                <img class='image img-fluid' src="./img/8.png" width="100%" alt="cute kitten on bed" />
                <img src="./img/remove_red_eye.svg" alt="" class="red_ee">

              </div>
              <div class="image-box">
                <img class='image img-fluid' src="./img/9.png" width="100%" alt="cute kitten under the blanker" />
                <img src="./img/remove_red_eye.svg" alt="" class="red_ee">

              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="pagin_ation">

        <div class="custom_pagination">

          <!-- PREV -->
          <button class="page_nav prev_btn" id="prevBtn">
            PREV
          </button>

          <!-- CENTER -->
          <div class="pagination_center">

            <!-- CURRENT PAGE -->
            <span class="current_page" id="currentPage">
              01
            </span>

            <!-- LINE -->
            <div class="pagination_line">

              <div class="pagination_progress" id="paginationProgress"></div>

            </div>

            <!-- TOTAL -->
            <span class="total_page" id="totalPage">
              10
            </span>

          </div>

          <!-- NEXT -->
          <button class="page_nav next_btn" id="nextBtn">
            NEXT
          </button>

        </div>

      </div>



    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>



<!-- ICOn CHANGE SEARCH -->
<script>
  const searchInputs = document.querySelectorAll('.search-js');
  const searchIcons = document.querySelectorAll('.ser_ico');

  searchInputs.forEach((input) => {
    input.addEventListener('focus', () => {
      const icon = input.nextElementSibling;
      icon.classList.add('crosss');
    });

    input.addEventListener('blur', () => {
      const icon = input.nextElementSibling;
      icon.classList.remove('crosss');
    });
  });
</script>

<!-- SEarch js -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('searchbox');
    const images = document.querySelectorAll('.image-box');
    const browseImagesTitle = document.querySelector('.bold_img');
    const filteredResultsLine = document.querySelector('.filtered-results');

    searchInput.addEventListener('input', function () {
      const searchText = searchInput.value.trim().toLowerCase();
      let filteredCount = 0;

      images.forEach(image => {
        const altText = image.querySelector('.image').getAttribute('alt').toLowerCase();
        if (altText.includes(searchText)) {
          image.style.display = 'block';
          filteredCount++;
        } else {
          image.style.display = 'none';
        }
      });

      // Update title
      if (searchText !== '') {
        browseImagesTitle.textContent = 'Search results';
      } else {
        browseImagesTitle.textContent = 'Browse images';
      }

      // Update filtered results count
      if (filteredCount > 0) {
        filteredResultsLine.textContent = `${filteredCount} images found`;
        filteredResultsLine.style.display = 'block';
      } else {
        filteredResultsLine.style.display = 'none';
      }
    });
  });
</script>

<!-- CusTom Select -->
<script>
  $(document).ready(function () {

    // Initialize custom select
    $(".custom-select").each(function () {

      var classes = $(this).attr("class");
      var id = $(this).attr("id");

      var template = '';

      // Main wrapper
      template += '<div class="' + classes + '">';

      // Trigger
      template += '<span class="custom-select-trigger trigger-' + id + '">';
      template += $(this).attr("placeholder");
      template += '</span>';

      // Options wrapper with dynamic class
      template += '<div class="custom-options options-' + id + '">';

      // Options
      $(this).find("option").each(function () {

        template += '<span class="custom-option" data-value="' + $(this).attr("value") + '">';
        template += $(this).html();
        template += '</span>';

      });

      template += '</div></div>';

      // Wrap select
      $(this).wrap('<div class="custom-select-wrapper"></div>');

      // Hide original select
      $(this).hide();

      // Add custom dropdown
      $(this).after(template);

    });

    // Open / Close dropdown
    $(document).on("click", ".custom-select-trigger", function (event) {

      event.stopPropagation();

      $(".custom-select")
        .not($(this).parent())
        .removeClass("opened");

      $(this).parent().toggleClass("opened");

    });

    // Select option
    $(document).on("click", ".custom-option", function () {

      var value = $(this).data("value");
      var text = $(this).text();

      var parent = $(this).closest(".custom-select");

      // Change text
      parent.find(".custom-select-trigger").text(text);

      // Active class
      parent.find(".custom-option").removeClass("selection");

      $(this).addClass("selection");

      // Close dropdown
      parent.removeClass("opened");

      // Update original select
      $(this)
        .closest(".custom-select-wrapper")
        .find("select")
        .val(value)
        .trigger("change");

    });

    // Close on outside click
    $(document).click(function () {

      $(".custom-select").removeClass("opened");

    });

  });
</script>


<!-- Custom Select Active  -->
<script>
  document.addEventListener("DOMContentLoaded", function () {

    const customSelect = document.querySelector(".custom-select");
    const trigger = document.querySelector(".custom-select-trigger");
    const options = document.querySelectorAll(".custom-option");
    const sortBox = document.querySelector(".sort_box_d");

    trigger.addEventListener("click", function () {

      customSelect.classList.toggle("opened");
      sortBox.classList.toggle("active");

    });

    options.forEach(option => {

      option.addEventListener("click", function () {

        trigger.innerHTML = option.textContent;

        customSelect.classList.remove("opened");

        // KEEP BORDER ACTIVE AFTER SELECT
        sortBox.classList.add("active");

      });

    });

    document.addEventListener("click", function (e) {

      if (!customSelect.contains(e.target)) {

        customSelect.classList.remove("opened");

      }

    });

  });
</script>


<!-- Pagination -->
<script>
  document.addEventListener("DOMContentLoaded", function () {

    let currentPage = 1;
    const totalPages = 10;

    const currentPageEl = document.getElementById("currentPage");
    const progressEl = document.getElementById("paginationProgress");

    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");

    function updatePagination() {

      currentPageEl.textContent =
        currentPage.toString().padStart(2, '0');

      const progressWidth =
        (currentPage / totalPages) * 100;

      progressEl.style.width = progressWidth + "%";
    }

    nextBtn.addEventListener("click", function () {

      if (currentPage < totalPages) {
        currentPage++;
        updatePagination();
      }

    });

    prevBtn.addEventListener("click", function () {

      if (currentPage > 1) {
        currentPage--;
        updatePagination();
      }

    });

    updatePagination();

  });
</script>

<!-- MObile View BTN TABS  -->
<script>
  document.addEventListener("DOMContentLoaded", function () {

    const showMoreBtn = document.getElementById("showMoreBtn");
    const moreTags = document.getElementById("moreTags");

    showMoreBtn.addEventListener("click", function () {

      moreTags.classList.toggle("show");
      showMoreBtn.classList.toggle("active");

      if (moreTags.classList.contains("show")) {

        showMoreBtn.childNodes[0].textContent = "Show Less...";

      } else {

        showMoreBtn.childNodes[0].textContent = "Show More...";

      }

    });

  });
</script>