<section id="top-sale">
            <div class="container py-5">
              <h4 class="font-rubik font-size-20">Top Sale</h4>
              <hr>
              <!-- owl carousel -->
                <div class="owl-carousel owl-theme">
                  <?php
                  
                  while($productInArr = $productInObj->fetch_assoc()){

                  ?>
                  <div class="item py-2">
                    <div class="product font-rale">
                      <a href="product.php?id=<?php echo $productInArr['item_id'];?>"><img src="<?php echo $productInArr['item_image'];?>" alt="product1" class="img-fluid"></a>
                      <div class="text-center">
                        <h6><?php echo $productInArr['item_name'];?></h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                          <span><?php echo $productInArr['item_price'];?></span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12"><a href="template/__cart_query.php?id=<?php echo $productInArr['item_id'];?>">Add to Cart</a></button>
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
