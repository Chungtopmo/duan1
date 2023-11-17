<?php
include "admin_header.php";
?>


<section>
                <div class="continer-fluid">
                    <div class="row">
                        <div class="col-md-2" style="background-color:maroon;">
                            <?php include('admin_sidenavbar.php'); ?>
                        </div>
                        <div class="col-md-10">
                            <h5 class="text-center mt-2" style="color:maroon;">Add Movie</h5>
                            <from methor="post">
                             <div class="container" style="color:maroon;">
                                <label for="moviename"><b>Movie Name</b></label>
                                <input type="text" style="border-radius:30px;" placeholder="Enter Movie Name" name="movie_name_txt"  required>

                                <label for="moviebanner"><b>Movie Banner</b></label><br>
                                <input type="file"  placeholder="" name="movie_banner_txt"  required>
                                <br><br>
                                
                                <label for="email"><b>Movie Describe</b></label><br>
                                <textarea name="movie_desc_txt" cols="20" rows="5"></textarea>
                                <br><br>

                                <label for="email"><b>Rel Date</b></label>
                                <input type="date" style="border-radius:30px;"  name="rel_date_txt"  required>

                                <label for="email"><b>Industry</b></label>
                                <input type="text" style="border-radius:30px;"  name="movie_industry_txt"  required>

                                <label for="email"><b>Genre</b></label>
                                <input type="text" style="border-radius:30px;"  name="movie_genre_txt"  required>

                                <label for="email"><b>Language</b></label>
                                <input type="text" style="border-radius:30px;"  name="movie_lang_txt"  required>

                                <label for="email"><b>Duration</b></label>
                                <input type="text" style="border-radius:30px;" placeholder="Enter Duration of Movie" name="movie_duration_txt"  required>
                                <button type="submit" name="btn_insert" class="btn" style="background-color:maroon;color:white;">Add Movie</button>
                             </div>
                            </from>
                        </div>
                    </div>
                </div>
            </section>

<?php
include "admin_footer.php"
?>