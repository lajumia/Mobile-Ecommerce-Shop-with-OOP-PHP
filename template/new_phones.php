<section id="new-phones">
            <div class="container">
              <h4 class="font-rubik font-size-20">New Phones</h4>
              <hr>

                    <!-- owl carousel -->
                    <div class="owl-carousel owl-theme">
                          <?php
                  
                          while($productNewResult = $productNew->fetch_assoc()){

                          ?>
                              <div class="item py-2 bg-light">
                                <div class="product font-rale">
                                  <a href="#"><img src="<?php echo $productNewResult['item_image'];?>" alt="product1" class="img-fluid"></a>
                                  <div class="text-center">
                                    <h6><?php echo $productNewResult['item_name'];?></h6>
                                    <div class="rating text-warning font-size-12">
                                      <span><i class="fas fa-star"></i></span>
                                      <span><i class="fas fa-star"></i></span>
                                      <span><i class="fas fa-star"></i></span>
                                      <span><i class="fas fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                      <span><?php echo $productNewResult['item_price'];?></span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                  </div>
                                </div>
                              </div>

                          <?php
                          }
                          ?>
                    </div>
                  <!-- !owl carousel -->

            </div>
          </section>