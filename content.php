    <section class="two_btn">
        <div class="page_top">Chúng tôi cung cấp cho bạn một giải pháp công nghệ toàn diện!</div>
        <div class="two_btn_content">
            <button class="more">TÌM HIỂU THÊM&nbsp;
                <i class="pl-10 fa fa-info"></i>
            </button>
            <button class="contact">LIÊN HỆ&nbsp;
                <i class="pl-10 fa fa-phone"></i>
            </button>
        </div>
    </section>
    <section class="service">
        <div class="title">
            DỊCH VỤ
        </div>
        <div class="separator"></div>
        <div class="service_title">Cung cấp các giải pháp phần mềm chuyên nghiệp hỗ trợ mọi nền tảng, 
            mọi ngôn ngữ.</div>
        <div class="flatforms">
            <div class="layout_cover">
                <div class="layout_content">
                    <div class="col-md-12">
                        <div class="row">
                            <?php foreach($servicese as $key => $value):?>
                            <div class="col-md-4">
                                <div class="flatforms_element">
                                    <div class="style_icon">
                                        <i class="<?php echo $value['icon'];?>"></i>
                                    </div>
                                    <div>
                                        <strong><b><?php echo $value['title'];?></b></strong>
                                    </div>
                                    <div class="title_middle">
                                        <?php echo $value['content'];?>
                                    </div>
                                    <div class="btn_more">
                                        <button class="more">TÌM HIỂU THÊM</button>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about_htactive">
        <div class="title">
            VỀ HT ACTIVE
        </div>
        <div class="separator"></div>
        <div class="layout_cover">
            <div class="layout_content">
                <div class="service_title">Chúng tôi, những bạn trẻ năng động và sáng tạo, 
                        những con người đam mê và cầu tiến, những chuyên viên phần mền đầy năng lực và nhiệt huyết, 
                        sẵn sàng mang đến tính chuyên nghiệp và sự hài lòng.</div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="title_small">
                                Đến với HT Active
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6 imgAboutus">
                                        <img src="images/section-image-2.png" alt="">
                                    </div>
                                    <div class="col-md-6 textsize">
                                        Chúng tôi hỗ trợ những dịch vụ, tạo ra các sản phẩm và truyển thông. 
                                        Chúng tôi yêu thích những gì mình làm ra, 
                                        và cả những người bạn cùng hợp tác.
                                    </div>
                                </div>
                            </div>
                            <div class="textsize">
                                HT Active sẽ không bao giờ hoạt động nếu thiếu đi sự đóng góp của mỗi thành viên, 
                                sự tin tưởng của khách hàng. 
                                Cảm ơn mọi người vì đã luôn ủng hộ và đặt niềm tin vào HT Active.
                            </div>
                            <div class="about_more">
                                <button class="more">TÌM HIỂU THÊM
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <?php foreach($abouts as $key=>$value):?>
                            <div class="collapse_custome" data-toggle="collapse" data-target="#demo<?php echo $value['id'];?>">
                                <i class="<?php echo $value['icon'];?>"></i>
                                <?php echo $value['title'];?>
                            </div>
                            <div id="demo<?php echo $value['id'];?>" class="collapse textsize collapse_content">
                                <?php echo $value['description'];?>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
            
    </section>
    <section class="contact_us">
        <div class="image_contact">
            <img src="images/portfolio-3.jpg" alt="">
        </div>
        <div class="layout_cover">
            <div class="layout_content">
                <div class="col-md-12">
                    <div class="callus_group">
                        <div class="col-md-9">
                            <div class="callus_title">ĐỪNG BỎ LỠ CƠ HỘI, LIÊN HỆ NGAY</div>
                            <div class="callus_text">Chúng tôi sẽ trả lời yêu cầu của bạn trong thời gian sớm nhất.</div>
                        </div>
                        <div class="col-md-3 callus_lh">
                            <div class="btn_lh">LIÊN HỆ</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ques_sol">
        <div class="title">
            TẠI SAO NÊN CHỌN HT ACTIVE
        </div>
        <div class="separator"></div>
        <div class="layout_cover">
            <div class="layout_content">
                <div class="service_title">
                    HT Active cung cấp chất lượng tuyệt vời trong thiết kế, 
                    phát triển và lập trình trang web hay ứng dụng của bạn. 
                    Chúng tôi hướng đến những giải pháp tốt nhất cho công việc của bạn và 
                    tư vấn nhiệt tình với một mực giá thấp nhất. 
                    Chúng tôi không ngừng nghiên cứu những công nghệ mới và áp dụng vào sản phẩm.
                </div>
                <div class="multabs">
                    <div class="tab">
                        <?php foreach($whyChoose as $key => $value):?>
                        <div class="tablinks" onclick="openCity(event, 'tab<?php echo $value['id']?>')"
                            <?php if($value['id']):?>
                            <?php echo'id="defaultOpen"';?>
                            <?php endif;?>
                        ><?php echo $value['title']?>
                        </div>
                        <?php endforeach;?>
                    </div>
                    <?php foreach($whyChoose as $key => $value):?>
                    <div id="tab<?php echo $value['id'] ?>" class="tabcontent tab_item" >
                        <div class="ques_sol_title">
                            <?php echo $value['title']?>
                        </div>
                        <div class="ques_sol_slogan">
                            <p>
                                <?php echo $value['description']?>
                            </p>
                        </div>
                        <div class="ques_sol_img">
                            <img src="<?php echo $value['image']?>" alt="htactive">
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </section>
    <section class="quote">
        <div class="layout_cover">
            <div class="layout_content">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 slider_footer">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="quote_client">
                                        <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="3000" id="myCarousel">
                                            <div class="carousel-inner">
                                                <?php foreach ($footerTop as $key => $value):?>
                                                    <div class="item 
                                                        <?php if($key=="client1"):
                                                            echo 'active';
                                                        endif;?>">
                                                        <div class="col-md-3 col-sm-6 col-xs-12 slider_footer"><a href="#"><img src="<?php echo $value?>"></a></div>
                                                    </div>
                                                <?php endforeach;?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-9">
                                        <blockquote>
                                            <div>Design is not just what it looks like and feels like. Design is how it works.</div>
                                        </blockquote>
                                    </div>
                                    <div class="col-md-3 cite_quote">
                                        <cite>-- Steve Jobs</cite>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>