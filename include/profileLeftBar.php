<!--<div style="background-image:url(images/long_plug_share.png);background-repeat:no-repeat;  height:65px; margin-left:-10px;"></div>-->
<a href="#"><div class="PlugandShare_logo"><img src="images/long_plug_share.png" /></div></a>
                            <div id="profile_show"><!--profile_show_open-->
                                <table><!--profile_show_table_open-->
                                <tr>
                                    <td class="vertical_top">
                                        <span><a href="PnsMain.php"><img src="images/cute_girl.png" /></a>
                                        </span>
                                    </td>
                                    <td class="vertical_top">
                                        <span class="profile_name">Kevin&nbsp;An</span><br />
                                        <span><a href="PNSuserProfileEdit.php">PROFILE</a></span><br />
                                        <div class="dot_border"></div>
                                        <span><a href="PnsConnectionDetailsSecondpage.php">CONNECTION</a></span><br />
                                        <div class="dot_border"></div>
                                    </td>
                                </tr>
                                </table><!--profile_show_table_closed-->
                               
                            </div><!--profile_show_closed-->
                            <div id="signout"><a href="#">SIGN OUT</a></div><br />
                            <div class="wrap">
                                <div class="graphite demo-container">
                                <ul class="accordion"  id="accordion-2">
                                <div style="border-radius:10px;">
                                <li class=""><!--Recent activity tab open-->
                                	<a href="#" class="graphite_heading">Recent Activity</a>
                                    <ul>
                                            <li>
                                            <a href="#" style="border-radius:0px;width:89%;">Kevin An is now connected to Allister <span class="text_color">Esguerra</span></a>
                                            <a href="#" style="border-radius:0px;width:89%;">Kevin An has joined <span class="text_color">internal_grp</span></a>
                                            <a href="#" style="border-radius:0 0 10px 10px;width:89%;">Tuan Ma uploaded smalllogo and <span class="text_color">splash-620*300</span> tothre <span class="text_color">internal_grp</span> group.</a>
                                            </li>
	                                </ul>
                                 </li><!--Recent activity tab closed-->
                                 </div><br>
                                                    
                                <li><!--Group tab open-->
                                	<a  href="#" style="font-size:16px;border-radius:10px 10px 0px 0px; width:87%;"><span onclick="window.location='yourGroup.php'">Group</span></a>
                                
                                <ul style="" class="sub_menu">
                                <div class="main_menu">
                                	   <div class="main_menu_title">
                                                <div class="main_menu_element"><span class="lock_button lock_deactive"></span><a href="groupdisplayPlug.php" class="collection_name"><span class="ancher">This is a group name</span></a><span class="edit_button pencil_deactive group_ok"></span></div>
                                                <div class="main_menu_element"><span class="lock_button lock_deactive"></span><a href="groupdisplayPlug.php" class="collection_name"><span class="ancher">Another normal group</span></a><span class="edit_button pencil_deactive group_ok"></span></div>
                                                <div class="main_menu_element"><span class="lock_button  lock_active group_ok"></span><a href="groupdisplayPlug.php" class="collection_name"><span class="ancher">A private group</span></a><span class="edit_button pencil_deactive group_ok"></span></div>
                                                <div class="main_menu_element"><span class="lock_button  lock_deactive"></span><a href="groupdisplayPlug.php" class="collection_name"><span class="ancher">This is a group name</span></a><span class="edit_button pencil_deactive group_ok"></span></div>
                                                  <div class="main_menu_element"><span class="lock_button  lock_active group_ok"></span><a href="groupdisplayPlug.php" class="collection_name"><span class="ancher">A private group</span></a><span class="edit_button pencil_deactive group_ok"></span></div>
                                       </div>
                                </div>
                                </ul>
                                </li><!--Group tab closed-->
                                <div id="edit_your_group"><a href="createGroup.php" style=""><div class="edit_img_collection"></div>&nbsp;CREATE GROUP</a></div><br />
                                <li><!--Collection tab open-->
                                	<a href="#" style="font-size:16px;border-radius:10px 10px 0 0 ;width:87%;"><span onclick="window.location='PnsCollectionPage.php'">Collection</span></a>
                                
                                <ul style="" class="sub_menu">
                                   <div class="main_menu">
                                  
                                   <div class="main_menu_title" onClick="javascript:menu_one(this);">
                                   		 <div class="main_menu_element"><span class="lock_button lock_deactive collection_ok"></span><a href="collectiondisplayPlug.php" class="collection_name"><span class="ancher">This is a collection name</span></a><span class="edit_button pencil_deactive collection_ok"></span></div>
                                                   <div class="main_menu_element"><span class="lock_button  lock_active collection_ok"></span><a href="collectiondisplayPlug.php" class="collection_name"><span class="ancher">A private collection</span></a><span class="edit_button pencil_deactive collection_ok"></span></div>
                                                <div class="main_menu_element"><span class="lock_button lock_deactive"></span><a href="collectiondisplayPlug.php" class="collection_name"><span class="ancher">Another normal collection</span></a><span class="edit_button pencil_deactive collection_ok"></span></div>
                                             
                                                <div class="main_menu_element"><span class="lock_button  lock_deactive"></span><a href="collectiondisplayPlug.php" class="collection_name"><span class="ancher">This is a collection name</span></a><span class="edit_button pencil_deactive collection_ok"></span></div>
                                                  <div class="main_menu_element"><span class="lock_button  lock_active collection_ok"></span><a href="collectiondisplayPlug.php" class="collection_name"><span class="ancher">A private collection</span></a><span class="edit_button pencil_deactive collection_ok"></span></div>
                                   
                                   		
                                        
                                   </div>
                              </div>
                                </ul>
                                </li><!--Collection tab closed-->
                                </div>
                                <div id="edit_your_collection" ><a href="createCollection.php"   style="position:relative; top:17px !important; margin-top:0px;"><div class="edit_img_collection"></div>&nbsp;CREATE  COLLECTION</a></div>
                                
<script type="text/javascript">
       /////// Confirm Collection  Box script  ////////	
        $(document).ready(function(){
        
        $('.collection_ok').click(function(){
            
            var elem = $(this).closest('.item');
            
            $.confirm({
                'title'		: 'Only Gaurav of private collection can edit the collection',
                'message'	: '',
                'buttons'	: {
                    'Ok'	: {
                        'class'	: 'blue',
                        'action': function(){
							 ////// Action ///////
                        }
                    },
                   
                }
            });
            
        });
        
    });
	
	/////// Confirm group  Box script  ////////	
	$(document).ready(function(){
	$('.group_ok').click(function(){
            
            var elem = $(this).closest('.item');
            
            $.confirm({
                'title'		: 'Only Gaurav of private group can edit the group',
                'message'	: '',
                'buttons'	: {
                    'Ok'	: {
                        'class'	: 'blue',
                        'action': function(){
                            ////// Action ///////
                        }
                    },
                   
                }
            });
            
        });
        
    });
	
	/////// active and inactive edit button /////////////////
	
    $(document).ready(function(){
        $('.edit_button').click(function () {
            $('.edit_button').removeClass('current').addClass('link');
            $(this).removeClass('pencil_deactive').addClass('pencil_active');
            var divname= this.name;
            $("#"+divname).show("fast").siblings().hide("fast");
        });
    });	
</script>