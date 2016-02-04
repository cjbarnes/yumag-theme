<?php
/**
 * The template for auto-generating an HTML email of the current issue, for use
 * in Blackbaud NetCommunity.
 *
 * @since 1.2.0
 *
 * @package YuMag
 */

if ( have_posts() ) :

	// Allow choice of colour by using a URL param.
	$colour = get_query_var( 'generate-email', 'c1aa99' );

	// Sanitize/validate colour code. Fall back to beige.
	if ( 1 !== preg_match( '/^(?=[0-9A-F]*$)(?:.{3}|.{6})$/i', $colour ) ) {
		$colour = 'c1aa99';
	}


?>
<style type="text/css">
	<!-- .ReadMsgBody {
		width: 100%;
		background-color: #ffffff;
	}

	.ExternalClass {
		width: 100%;
		background-color: #ffffff;
	}

	.ExternalClass,
	.ExternalClass p,
	.ExternalClass span,
	.ExternalClass font,
	.ExternalClass td,
	.ExternalClass div {
		line-height: 100%;
	}

	html {
		width: 100%;
	}

	body {
		-webkit-text-size-adjust: none;
		-ms-text-size-adjust: none;
		margin: 0;
		padding: 0;
	}

	table {
		border-spacing: 0;
		border-collapse: collapse;
		table-layout: fixed;
		margin: 0 auto;
	}

	table table table {
		table-layout: auto;
	}

	img {
		display: block !important;
	}

	table td {
		border-collapse: collapse;
	}

	.yshortcuts a {
		border-bottom: none !important;
	}

	a {
		color: <?php echo "#$colour"; ?>;
		text-decoration: none;
	}

	.button a {
		color: #ffffff !important;
	}

	.textbutton a {
		font-family: 'open sans', arial, sans-serif !important;
		color: #ffffff !important;
	}

	@media only screen and (max-width: 640px) {
		body {
			width: auto !important;
		}
		table[class="table600"] {
			width: 450px !important;
			text-align: center !important;
		}
		table[class="table-inner"] {
			width: 90% !important;
			text-align: center !important;
		}
		table[class="table2-2"] {
			width: 47% !important;
		}
		table[class="table3-3"] {
			width: 100% !important;
			text-align: center !important;
		}
		table[class="table1-3"] {
			width: 29% !important;
		}
		table[class="table3-1"] {
			width: 64% !important;
			text-align: left !important;
		}
		table[class="footer-note"] {
			width: 100% !important;
			text-align: left !important;
		}
		table[class="footer-column"] {
			width: 47% !important;
			text-align: left !important;
		}
		td[class="td-hide"] {
			max-height: 0px !important;
			height: 0px !important;
		}
		img[class="img-hide"] {
			max-height: 0px !important;
			max-width: 0px !important;
			height: 0px !important;
		}
		/* Image */
		img[class="img1"] {
			width: 100% !important;
			height: auto !important;
		}
	}

	@media only screen and (max-width: 479px) {
		body {
			width: auto !important;
		}
		table[class="table600"] {
			width: 290px !important;
		}
		table[class="table-inner"] {
			width: 82% !important;
		}
		table[class="table2-2"] {
			width: 100% !important;
		}
		table[class="table3-3"] {
			width: 100% !important;
			text-align: center !important;
		}
		table[class="table1-3"] {
			width: 100% !important;
		}
		table[class="table3-1"] {
			width: 100% !important;
			text-align: center !important;
		}
		td[class="td-hide"] {
			max-height: 0px !important;
		}
		table[class="footer-note"] {
			width: 100% !important;
			text-align: center !important;
		}
		table[class="footer-column"] {
			width: 100% !important;
			text-align: center !important;
		}
		/* image */
		img[class="img1"] {
			width: 100% !important;
		}
	}

	-->
</style>
<table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
<!--Header bar-->
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
	<tbody>
		<tr>
			<td>
				<table align="center" border="0" cellpadding="0" cellspacing="0" class="table600" style="width: 600px;">
					<tbody>
						<tr>
							<td height="50">&nbsp;</td>
						</tr>
						<tr>
							<td valign="middle">
								<!--Logo-->
								<table align="left" border="0" cellpadding="0" cellspacing="0" class="table3-3" style="width: 130px;">
									<tbody>
										<tr>
											<td align="center"><img alt="logo" height="19" src="http://www.yorkspace.net/image/yumagazineonline/uoy_logo_small.png" width="139" /></td>
										</tr>
									</tbody>
								</table>
								<!--End Logo-->
							</td>
						</tr>
						<tr>
							<td height="35">&nbsp;</td>
						</tr>
						<tr>
							<td>
								<!--menu-->
								<table align="left" border="0" cellpadding="0" cellspacing="0" class="table3-3" style="width: 300px;">
									<tbody>
										<tr>
											<td>
												<!-- botton left -->
												<table align="center" border="0" cellpadding="0" cellspacing="0" style="width: 300px;">
													<tbody>
														<tr>
															<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 11px; color: #7f8c8d; line-height: 24px;" height="25"><a style="color: #7f8c8d;" href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a></td>
															<td width="15">&nbsp;</td>
															<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 11px; color: #7f8c8d; line-height: 24px;"><a style="color: #7f8c8d;" href="https://uoysurvey.typeform.com/to/d4nvDh">Submissions</a></td>
															<td width="15">&nbsp;</td>
															<td align="center" width="90">
																<table align="right" bgcolor="#ecf0f1" border="0" cellpadding="0" cellspacing="0" style="border-radius: 30px; width: 90px;">
																	<tbody>
																		<tr>
																			<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 11px; color: #7f8c8d;" align="center" height="25"><a style="color: #8f8f8f; line-height: 24px;" href="mailto:alumni@york.ac.uk">Contact us</a></td>
																		</tr>
																	</tbody>
																</table>
																<!-- end button right -->
															</td>
														</tr>
													</tbody>
												</table>
												<!-- end button left -->
											</td>
										</tr>
									</tbody>
								</table>
								<!--End menu-->
								<!--Space-->
								<table align="left" border="0" cellpadding="0" cellspacing="0" style="width: 1px; height: 10px;">
									<tbody>
										<tr>
											<td style="font-size: 0; line-height: 0; border-collapse: collapse;" height="10">
												<p style="padding-left: 24px;">&nbsp;</p>
											</td>
										</tr>
									</tbody>
								</table>
								<!--End Space-->
								<!-- preference -->
								<table align="right" border="0" cellpadding="0" cellspacing="0" class="table3-3" style="width: 180px;">
									<tbody>
										<tr>
											<td>
												<table align="center" border="0" cellpadding="0" cellspacing="0" style="width: 180px;">
													<tbody>
														<tr>
															<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 11px; color: #7f8c8d; line-height: 24px;" height="25"><a style="color: #7f8c8d;" href="<?php echo esc_url( home_url( '/' ) ); ?>">Online Version</a></td>
															<td width="20">&nbsp;</td>
															<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 11px; color: #7f8c8d; line-height: 24px;"><a style="color:#7f8c8d;" href="http://www.yorkspace.net/">YorkSpace</a></td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
									</tbody>
								</table>
								<!-- end preference -->
							</td>
						</tr>
						<tr>
							<td height="40">&nbsp;</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>
</td>
</tr>
<!--end Header bar-->
<!-- Header -->
<tr>
<td>
<table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
	<tbody>
		<tr>
			<td style="background-size: cover; background-position: top;" valign="top" bgcolor="<?php echo "#$colour"; ?>">
				<table align="center" border="0" cellpadding="0" cellspacing="0" class="table600" style="width: 600px;">
					<tbody>
						<tr>
							<td>
								<table align="left" border="0" cellpadding="0" cellspacing="0" class="table3-3" style="width: 287px;">
									<tbody>
										<tr>
											<td style="line-height: 0px;" align="center" valign="top" height="60"><img alt="img" height="10" src="http://www.yorkspace.net/image/yu_header-top-point.png" style="display: block; font-size: 0px; line-height: 0px;" width="25" /></td>
										</tr>
										<!-- title -->
										<tr align="center" valign="top">
											<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 30px; font-weight: bold; color: #ffffff;">Welcome</td>
										</tr>
										<!-- end title -->
										<tr>
											<td height="10">&nbsp;</td>
										</tr>
										<!-- content -->
										<tr align="center" valign="top">
											<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 13px; color: #ffffff; line-height: 24px;">INSERT INTRODUCTION HERE.</td>
										</tr>
										<!-- end content -->
										<tr>
											<td height="18">&nbsp;</td>
										</tr>
										<tr>
											<td align="center">
												<table align="center" border="0" cellpadding="0" cellspacing="0" style="width: 180px;">
													<tbody>
														<tr>
															<td>
																<!-- button -->
																<table align="center" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" style="border-radius: 3px; width: 90px;">
																	<tbody>
																		<tr>
																			<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 11px; color: #21b6ae;" align="center" height="30"><a style="color: <?php echo "#$colour"; ?>;" href="<?php echo esc_url( home_url( '/' ) ); ?>">Read more</a></td>
																		</tr>
																	</tbody>
																</table>
																<!-- end button -->
															</td>
															<td width="10">&nbsp;</td>
															<!-- link -->
															<td class="button" style="font-family: 'Open Sans', Arial, sans-serif; font-size: 12px;"><a style=" color: #fffffe;" href="mailto:alumni@york.ac.uk">Contact us</a></td>
															<!-- end link -->
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
										<tr>
											<td class="td-hide" style="line-height: 0px;" align="center" valign="bottom" height="63"><img alt="img" class="img-hide" height="10" src="http://www.yorkspace.net/image/Yu_header-bottom-point.png" style="display: block; font-size: 0px; line-height: 0px;" width="25" /></td>
										</tr>
									</tbody>
								</table>
								<!--Space-->
								<table align="left" border="0" cellpadding="0" cellspacing="0" style="width: 1px; height: 20px;">
									<tbody>
										<tr>
											<td style="font-size: 0; line-height: 0; border-collapse: collapse;" height="10">
												<p style="padding-left: 24px;">&nbsp;</p>
											</td>
										</tr>
									</tbody>
								</table>
								<!--End Space-->
								<!-- img -->
								<table align="right" border="0" cellpadding="0" cellspacing="0" class="table3-3" style="width: 287px;">
									<tbody>
										<tr>
											<td style="line-height: 0px;" align="center"><img alt="img" class="img1" height="270" src="http://www.yorkspace.net/image/yumagazineonline/yu_square.png" style="display: block;" width="287" /></td>
										</tr>
									</tbody>
								</table>
								<!-- end img -->
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>
</td>
</tr>
<!-- end Header -->
<!-- 2/2 panel -->
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="table600" style="width: 600px;">
	<tbody>
		<tr>
			<td height="40">&nbsp;</td>
		</tr>
		<tr>
			<td>

				<!--
				  POST 1
			    -->

<?php /* The Loop */
		if ( have_posts() ) {
			do {
				yumag_section_the_post();
			} while ( have_posts() && in_category( 'back-page', $post->ID ) );
		}

		if ( have_posts() ) :
			yumag_section_setup_postdata();
?>

				<!-- left -->
				<table align="left" border="0" cellpadding="0" cellspacing="0" class="table2-2" style="width: 287px; border-bottom-color: #ecf0f1; border-bottom-width: 3px; border-bottom-style: solid;">
					<!-- image -->
					<tbody>
						<tr align="center">
							<td><?php yumag_email_entry_image( 'yumag-email-1', 'img1' ); ?></td>
						</tr>
						<!-- end image -->
						<tr>
							<td bgcolor="#f8f8f8">
								<table align="center" border="0" cellpadding="0" cellspacing="0" class="table-inner" style="width: 237px;">
									<tbody>
										<tr>
											<td height="20">&nbsp;</td>
										</tr>
										<!-- title -->
										<tr align="center">
											<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 18px; font-weight: bold; color: <?php echo "#$colour"; ?>;"><?php the_title(); ?></td>
										</tr>
										<!-- end title -->
										<tr>
											<td height="10">&nbsp;</td>
										</tr>
										<!-- content -->
										<tr>
											<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 13px; color: #7f8c8d; line-height: 24px;" align="center" valign="top"><?php
												if ( function_exists( 'the_subtitle' ) && ( the_subtitle( '', '', false ) ) ) {
													the_subtitle();
												} else {
													the_excerpt();
												}
											?></td>
										</tr>
										<!-- end content -->
										<tr>
											<td height="15">&nbsp;</td>
										</tr>
										<!-- button -->
										<tr>
											<td align="center">
												<table align="center" border="0" cellpadding="0" cellspacing="0" style="width: 180px;">
													<tbody>
														<tr>
															<td>
																<table align="center" bgcolor="<?php echo "#$colour"; ?>" border="0" cellpadding="0" cellspacing="0" class="button" style="border-radius: 3px; width: 90px;">
																	<tbody>
																		<tr>
																			<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 11px; color: #21b6ae;" align="center" height="30"><a style="color: #ffffff;" href="<?php the_permalink(); ?>">Read more</a></td>
																		</tr>
																	</tbody>
																</table>
															</td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
										<!-- end button -->
										<tr>
											<td height="20">&nbsp;</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
				<!-- end left -->
				<!--Space-->
				<table align="left" border="0" cellpadding="0" cellspacing="0" style="width: 1px; height: 30px;">
					<tbody>
						<tr>
							<td style="font-size: 0; line-height: 0; border-collapse: collapse;" height="30">
								<p style="padding-left: 24px;">&nbsp;</p>
							</td>
						</tr>
					</tbody>
				</table>
				<!--End Space-->

<?php
	endif;
?>

				<!--
				  POST 2
			    -->

<?php /* The Loop */
		if ( have_posts() ) {
			do {
				yumag_section_the_post();
			} while ( have_posts() && in_category( 'back-page', $post->ID ) );
		}

		if ( have_posts() ) :
			yumag_section_setup_postdata();
?>

				<!-- right -->
				<table align="right" border="0" cellpadding="0" cellspacing="0" class="table2-2" style="width: 287px; border-bottom-color: #ecf0f1; border-bottom-width: 3px; border-bottom-style: solid;">
					<!-- image -->
					<tbody>
						<tr align="center">
							<td><?php yumag_email_entry_image( 'yumag-email-1', 'img1' ); ?></td>
						</tr>
						<!-- end image -->
						<tr>
							<td bgcolor="#f8f8f8">
								<table align="center" border="0" cellpadding="0" cellspacing="0" class="table-inner" style="width: 237px;">
									<tbody>
										<tr>
											<td height="20">&nbsp;</td>
										</tr>
										<!-- title -->
										<tr align="center">
											<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 18px; font-weight: bold; color: <?php echo "#$colour"; ?>;"><?php the_title(); ?></td>
										</tr>
										<!-- end title -->
										<tr>
											<td height="10">&nbsp;</td>
										</tr>
										<!-- content -->
										<tr>
											<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 13px; color: #7f8c8d; line-height: 24px;" align="center" valign="top"><?php
                        if ( function_exists( 'the_subtitle' ) && ( the_subtitle( '', '', false ) ) ) {
                          the_subtitle();
                        } else {
                          the_excerpt();
                        }
                      ?></td>
										</tr>
										<!-- end content -->
										<tr>
											<td height="15">&nbsp;</td>
										</tr>
										<!-- button -->
										<tr>
											<td align="center">
												<table align="center" border="0" cellpadding="0" cellspacing="0" style="width: 180px;">
													<tbody>
														<tr>
															<td>
																<table align="center" bgcolor="<?php echo "#$colour"; ?>" border="0" cellpadding="0" cellspacing="0" class="button" style="border-radius: 3px; width: 90px;">
																	<tbody>
																		<tr>
																			<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 11px; color: #21b6ae;" align="center" height="30"><a style="color: #ffffff;" href="<?php the_permalink(); ?>">Read more</a></td>
																		</tr>
																	</tbody>
																</table>
															</td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
										<!-- end button -->
										<tr>
											<td height="20">&nbsp;</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
				<!-- end right -->

<?php
  endif;
?>

			</td>
		</tr>
	</tbody>
</table>
</td>
</tr>
<!-- end 2/2 panel -->


<!--
  POST 3
  -->

<?php /* The Loop */
  if ( have_posts() ) {
    do {
      yumag_section_the_post();
    } while ( have_posts() && in_category( 'back-page', $post->ID ) );
  }

  if ( have_posts() ) :
    yumag_section_setup_postdata();
?>

<!-- 1/2 box [right text] -->
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="table600" style="width: 600px;">
	<tbody>
		<tr>
			<td height="40">&nbsp;</td>
		</tr>
		<tr>
			<td bgcolor="#ecf0f1">
				<table align="left" border="0" cellpadding="0" cellspacing="0" class="table3-3" style="width: 287px;">
					<!-- img -->
					<tbody>
						<tr>
							<td><?php yumag_email_entry_image( 'yumag-email-1', 'img1' ); ?></td>
						</tr>
						<!-- end img -->
					</tbody>
				</table>
				<!--Space-->
				<table align="left" border="0" cellpadding="0" cellspacing="0" style="width: 1px; height: 30px;">
					<tbody>
						<tr>
							<td style="font-size: 0; line-height: 0; border-collapse: collapse;" height="30">
								<p style="padding-left: 24px;">&nbsp;</p>
							</td>
						</tr>
					</tbody>
				</table>
				<!--End Space-->
				<table align="right" border="0" cellpadding="0" cellspacing="0" class="table3-3" style="width: 287px;">
					<tbody>
						<tr>
							<td class="td-hide" style="line-height: 0px;" align="center" valign="top" height="30"><img alt="img" class="img-hide" height="10" src="http://www.yorkspace.net/image/yu_header-top-point.png" style="display: block; font-size: 0px; line-height: 0px;" width="25" /></td>
						</tr>
						<tr>
							<td>
								<table align="center" border="0" cellpadding="0" cellspacing="0" class="table-inner" style="width: 237px;">
									<!-- content -->
									<tbody>
										<tr align="left">
											<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 13px; color: #7f8c8d; line-height: 24px;"><strong><?php the_title(); ?></strong> <?php
                        if ( function_exists( 'the_subtitle' ) && ( the_subtitle( '', '', false ) ) ) {
                          the_subtitle();
                        } else {
                          the_excerpt();
                        }
                      ?> <strong><a style="color: <?php echo "#$colour"; ?>" href="<?php the_permalink(); ?>">Read&nbsp;more</a></strong></td>
										</tr>
										<!-- end content -->
									</tbody>
								</table>
							</td>
						</tr>
						<tr>
							<td style="font-size: 0px; line-height: 0px;" height="30">&nbsp;</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>
</td>
</tr>
<!-- end 1/2 box [right text] -->


<?php
  endif;
?>

<!--
  POST 4
  -->

<?php /* The Loop */
  if ( have_posts() ) {
    do {
      yumag_section_the_post();
    } while ( have_posts() && in_category( 'back-page', $post->ID ) );
  }

  if ( have_posts() ) :
    yumag_section_setup_postdata();
?>


<!-- 1/2 box [left text] -->
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="table600" style="width: 600px;">
	<tbody>
		<tr>
			<td height="40">&nbsp;</td>
		</tr>
		<tr>
			<td bgcolor="#ecf0f1">
				<table align="left" border="0" cellpadding="0" cellspacing="0" class="table3-3" style="width: 287px;">
					<tbody>
						<tr>
							<td style="line-height: 0px;" align="center" valign="top" height="30"><img alt="img" class="img-hide" height="10" src="http://www.yorkspace.net/image/yu_header-top-point.png" style="display: block; font-size: 0px; line-height: 0px;" width="25" /></td>
						</tr>
						<tr>
							<td>
								<table align="center" border="0" cellpadding="0" cellspacing="0" class="table-inner" style="width: 237px;">
									<!-- content -->
									<tbody>
										<tr align="left">
											<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 13px; color: #7f8c8d; line-height: 24px;"><strong><?php the_title(); ?></strong> <?php
                        if ( function_exists( 'the_subtitle' ) && ( the_subtitle( '', '', false ) ) ) {
                          the_subtitle();
                        } else {
                          the_excerpt();
                        }
                      ?> <strong><a style="color: <?php echo "#$colour"; ?>" href="<?php the_permalink(); ?>">Read&nbsp;more</a></strong></td>
										</tr>
										<!-- end content -->
									</tbody>
								</table>
							</td>
						</tr>
						<tr>
							<td class="td-hide" style="font-size: 0px; line-height: 0px;" align="center" valign="bottom" height="30">&nbsp;</td>
						</tr>
					</tbody>
				</table>
				<!--Space-->
				<table align="left" border="0" cellpadding="0" cellspacing="0" style="width: 1px; height: 30px;">
					<tbody>
						<tr>
							<td style="font-size: 0; line-height: 0; border-collapse: collapse;" height="30">
								<p style="padding-left: 24px;">&nbsp;</p>
							</td>
						</tr>
					</tbody>
				</table>
				<!--End Space-->
				<table align="right" border="0" cellpadding="0" cellspacing="0" class="table3-3" style="width: 287px;">
					<!-- img -->
					<tbody>
						<tr>
							<td><?php yumag_email_entry_image( 'yumag-email-1', 'img1' ); ?></td>
						</tr>
						<!-- end img -->
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>
</td>
</tr>
<!-- end 1/2 box [left text] -->

<?php
  endif;
?>

<!--
  POST 5
  -->

<?php /* The Loop */
  if ( have_posts() ) {
    do {
      yumag_section_the_post();
    } while ( have_posts() && in_category( 'back-page', $post->ID ) );
  }

  if ( have_posts() ) :
    yumag_section_setup_postdata();
?>


<!-- 1/2 panel [right text] -->
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
	<tbody>
		<tr>
			<td height="40">&nbsp;</td>
		</tr>
		<tr>
			<td bgcolor="#f8f8f8">
				<table align="center" border="0" cellpadding="0" cellspacing="0" class="table600" style="width: 600px;">
					<tbody>
						<tr>
							<td height="40">&nbsp;</td>
						</tr>
						<tr>
							<td>
								<table align="left" border="0" cellpadding="0" cellspacing="0" class="table2-2" style="width: 287px;">
									<!-- img -->
									<tbody>
										<tr>
											<td><?php yumag_email_entry_image( 'yumag-email-1', 'img1' ); ?></td>
										</tr>
										<!-- end img -->
									</tbody>
								</table>
								<!--Space-->
								<table align="left" border="0" cellpadding="0" cellspacing="0" style="width: 1px; height: 20px;">
									<tbody>
										<tr>
											<td style="font-size: 0; line-height: 0; border-collapse: collapse;" height="20">
												<p style="padding-left: 24px;">&nbsp;</p>
											</td>
										</tr>
									</tbody>
								</table>
								<!--End Space-->
								<table align="right" border="0" cellpadding="0" cellspacing="0" class="table2-2" style="width: 287px;">
									<!-- title -->
									<tbody>
										<tr>
											<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 18px; font-weight: bold; color: <?php echo "#$colour"; ?>;" align="left"><?php the_title(); ?></td>
										</tr>
										<!-- end title -->
										<tr>
											<td height="10">&nbsp;</td>
										</tr>
										<!-- content -->
										<tr>
											<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 13px; color: #7f8c8d; line-height: 24px;" align="left" valign="top"><?php
                        if ( function_exists( 'the_subtitle' ) && ( the_subtitle( '', '', false ) ) ) {
                          the_subtitle();
                        } else {
                          the_excerpt();
                        }
                      ?></td>
										</tr>
										<!-- end content -->
										<tr>
											<td height="18">&nbsp;</td>
										</tr>
										<!-- button -->
										<tr>
											<td align="left">
												<table bgcolor="<?php echo "#$colour"; ?>" border="0" cellpadding="0" cellspacing="0" class="button" style="border-radius: 3px; width: 90px;">
													<tbody>
														<tr>
															<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 11px; color: #21b6ae;" align="center" height="30"><a style="color: #ffffff;" href="<?php the_permalink(); ?>">Read more</a></td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
										<!-- end button -->
									</tbody>
								</table>
							</td>
						</tr>
						<tr>
							<td height="40">&nbsp;</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>
</td>
</tr>
<!-- end 1/2 panel [right text] -->

<?php
  endif;
?>

<!--
  POST 6
  -->

<?php /* The Loop */
  if ( have_posts() ) {
    do {
      yumag_section_the_post();
    } while ( have_posts() && in_category( 'back-page', $post->ID ) );
  }

  if ( have_posts() ) :
    yumag_section_setup_postdata();
?>

<!-- 1/2 panel [left text] -->
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="table600" style="width: 600px;">
	<tbody>
		<tr>
			<td height="40">&nbsp;</td>
		</tr>
		<tr>
			<td>
				<table align="right" border="0" cellpadding="0" cellspacing="0" class="table2-2" style="width: 287px;">
					<!-- img -->
					<tbody>
						<tr>
							<td><?php yumag_email_entry_image( 'yumag-email-1', 'img1' ); ?></td>
						</tr>
						<!-- end img -->
					</tbody>
				</table>
				<!--Space-->
				<table align="right" border="0" cellpadding="0" cellspacing="0" style="width: 1px; height: 20px;">
					<tbody>
						<tr>
							<td style="font-size: 0; line-height: 0; border-collapse: collapse;" height="20">
								<p style="padding-left: 24px;">&nbsp;</p>
							</td>
						</tr>
					</tbody>
				</table>
				<!--End Space-->
				<table align="left" border="0" cellpadding="0" cellspacing="0" class="table2-2" style="width: 287px;">
					<!-- title -->
					<tbody>
						<tr align="left">
							<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 18px; font-weight: bold; color: <?php echo "#$colour"; ?>;"><?php the_title(); ?></td>
						</tr>
						<!-- end title -->
						<tr>
							<td height="10">&nbsp;</td>
						</tr>
						<!-- content -->
						<tr align="left">
							<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 13px; color: #7f8c8d; line-height: 24px;" valign="top"><?php
	              if ( function_exists( 'the_subtitle' ) && ( the_subtitle( '', '', false ) ) ) {
	                the_subtitle();
	              } else {
	                the_excerpt();
	              }
	            ?></td>
						</tr>
						<!-- end content -->
						<tr>
							<td height="18">&nbsp;</td>
						</tr>
						<tr>
							<td>
								<table bgcolor="<?php echo "#$colour"; ?>" border="0" cellpadding="0" cellspacing="0" class="button" style="border-radius: 3px; width: 90px;">
									<tbody>
										<tr>
											<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 11px; color: #21b6ae;" align="center" height="30"><a style="color: #ffffff;" href="<?php the_permalink(); ?>">Read more</a></td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>
</td>
</tr>
<!-- end 1/2 panel [left text] -->

<?php
  endif;
?>

<!-- 3/3 panel -->
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="table600" style="width: 600px;">
	<tbody>
		<tr>
			<td height="40">&nbsp;</td>
		</tr>
		<tr>
			<td>

<!--
  POST 7
  -->

<?php /* The Loop */
  if ( have_posts() ) {
    do {
      yumag_section_the_post();
    } while ( have_posts() && in_category( 'back-page', $post->ID ) );
  }

  if ( have_posts() ) :
    yumag_section_setup_postdata();
?>

				<!-- left -->
				<table align="left" border="0" cellpadding="0" cellspacing="0" class="table3-3" style="width: 183px; border-bottom-color: #ecf0f1; border-bottom-width: 3px; border-bottom-style: solid;">
					<!-- image -->
					<tbody>
						<tr align="center">
							<td><?php yumag_email_entry_image( 'yumag-email-2', 'img1' ); ?></td>
						</tr>
						<!-- end image -->
						<tr>
							<td bgcolor="#f8f8f8">
								<table align="center" border="0" cellpadding="0" cellspacing="0" class="table-inner" style="width: 133px;">
									<tbody>
										<tr>
											<td height="20">&nbsp;</td>
										</tr>
										<!-- title -->
										<tr align="center">
											<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 18px; font-weight: bold; color: <?php echo "#$colour"; ?>;"><?php the_title(); ?></td>
										</tr>
										<!-- end title -->
										<tr>
											<td height="10">&nbsp;</td>
										</tr>
										<!-- content -->
										<tr>
											<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 13px; color: #7f8c8d; line-height: 24px;" align="center" valign="top"><?php if ( function_exists( 'the_subtitle' ) && ( the_subtitle( '', '', false ) ) ) {
                          the_subtitle();
                        } else {
                          the_excerpt();
                        } ?></td>
										</tr>
										<!-- end content -->
										<tr>
											<td height="15">&nbsp;</td>
										</tr>
										<!-- button -->
										<tr>
											<td align="center">
												<table align="center" bgcolor="<?php echo "#$colour"; ?>" border="0" cellpadding="0" cellspacing="0" class="button" style="border-radius: 3px; width: 90px;">
													<tbody>
														<tr>
															<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 11px; color: #21b6ae;" align="center" height="30"><a style="color: #ffffff;" href="<?php the_permalink(); ?>">Read more</a></td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
										<!-- end button -->
										<tr>
											<td height="20">&nbsp;</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
				<!-- end left -->

<?php
  endif;
?>

				<!--Space-->
				<table align="left" border="0" cellpadding="0" cellspacing="0" style="width: 1px; height: 30px;">
					<tbody>
						<tr>
							<td style="font-size: 0; line-height: 0; border-collapse: collapse;" height="30">
								<p style="padding-left: 24px;">&nbsp;</p>
							</td>
						</tr>
					</tbody>
				</table>
				<!--End Space-->

<!--
  POST 8
  -->

<?php /* The Loop */
  if ( have_posts() ) {
    do {
      yumag_section_the_post();
    } while ( have_posts() && in_category( 'back-page', $post->ID ) );
  }

  if ( have_posts() ) :
    yumag_section_setup_postdata();
?>


				<!-- middle -->
				<table align="left" border="0" cellpadding="0" cellspacing="0" class="table3-3" style="width: 183px; border-bottom-color: #ecf0f1; border-bottom-width: 3px; border-bottom-style: solid;">
					<!-- image -->
					<tbody>
						<tr align="center">
							<td><?php yumag_email_entry_image( 'yumag-email-2', 'img1' ); ?></td>
						</tr>
						<!-- end image -->
						<tr>
							<td bgcolor="#f8f8f8">
								<table align="center" border="0" cellpadding="0" cellspacing="0" class="table-inner" style="width: 133px;">
									<tbody>
										<tr>
											<td height="20">&nbsp;</td>
										</tr>
										<!-- title -->
										<tr align="center">
											<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 18px; font-weight: bold; color: <?php echo "#$colour"; ?>;"><?php the_title(); ?></td>
										</tr>
										<!-- end title -->
										<tr>
											<td height="10">&nbsp;</td>
										</tr>
										<!-- content -->
										<tr>
											<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 13px; color: #7f8c8d; line-height: 24px;" align="center" valign="top"><?php
                        if ( function_exists( 'the_subtitle' ) && ( the_subtitle( '', '', false ) ) ) {
                          the_subtitle();
                        } else {
                          the_excerpt();
                        }
                      ?></td>
										</tr>
										<!-- end content -->
										<tr>
											<td height="15">&nbsp;</td>
										</tr>
										<!-- button -->
										<tr>
											<td align="center">
												<table align="center" bgcolor="<?php echo "#$colour"; ?>" border="0" cellpadding="0" cellspacing="0" class="button" style="border-radius: 3px; width: 90px;">
													<tbody>
														<tr>
															<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 11px; color: #21b6ae;" align="center" height="30"><a style="color: #ffffff;" href="<?php the_permalink(); ?>">Read more</a></td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
										<!-- end button -->
										<tr>
											<td height="20">&nbsp;</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
				<!-- end middle -->

<?php
  endif;
?>

				<!--Space-->
				<table align="left" border="0" cellpadding="0" cellspacing="0" style="width: 1px; height: 30px;">
					<tbody>
						<tr>
							<td style="font-size: 0; line-height: 0; border-collapse: collapse;" height="30">
								<p style="padding-left: 24px;">&nbsp;</p>
							</td>
						</tr>
					</tbody>
				</table>
				<!--End Space-->

<!--
  POST 9
  -->

<?php /* The Loop */
  if ( have_posts() ) {
    do {
      yumag_section_the_post();
    } while ( have_posts() && in_category( 'back-page', $post->ID ) );
  }

  if ( have_posts() ) :
    yumag_section_setup_postdata();
?>

				<!-- right -->
				<table align="right" border="0" cellpadding="0" cellspacing="0" class="table3-3" style="width: 183px; border-bottom-color: #ecf0f1; border-bottom-width: 3px; border-bottom-style: solid;">
					<!-- image -->
					<tbody>
						<tr align="center">
							<td><?php yumag_email_entry_image( 'yumag-email-2', 'img1' ); ?></td>
						</tr>
						<!-- end image -->
						<tr>
							<td bgcolor="#f8f8f8">
								<table align="center" border="0" cellpadding="0" cellspacing="0" class="table-inner" style="width: 133px;">
									<tbody>
										<tr>
											<td height="20">&nbsp;</td>
										</tr>
										<!-- title -->
										<tr align="center">
											<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 18px; font-weight: bold; color: <?php echo "#$colour"; ?>;"><?php the_title(); ?></td>
										</tr>
										<!-- end title -->
										<tr>
											<td height="10">&nbsp;</td>
										</tr>
										<!-- content -->
										<tr>
											<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 13px; color: #7f8c8d; line-height: 24px;" align="center" valign="top"><?php
                        if ( function_exists( 'the_subtitle' ) && ( the_subtitle( '', '', false ) ) ) {
                          the_subtitle();
                        } else {
                          the_excerpt();
                        }
                      ?></td>
										</tr>
										<!-- end content -->
										<tr>
											<td height="15">&nbsp;</td>
										</tr>
										<!-- button -->
										<tr>
											<td align="center">
												<table align="center" bgcolor="<?php echo "#$colour"; ?>" border="0" cellpadding="0" cellspacing="0" class="button" style="border-radius: 3px; width: 90px;">
													<tbody>
														<tr>
															<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 11px; color: #21b6ae;" align="center" height="30"><a style="color: #ffffff;" href="<?php the_permalink(); ?>">Read more</a></td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
										<!-- end button -->
										<tr>
											<td height="20">&nbsp;</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
				<!-- end right -->

<?php
  endif;
?>

			</td>
		</tr>
	</tbody>
</table>
</td>
</tr>
<!-- end 3/3 icon -->

<!--
    POST 10
    -->

  <?php /* The Loop */
    if ( have_posts() ) {
      do {
        yumag_section_the_post();
      } while ( have_posts() && in_category( 'back-page', $post->ID ) );
    }

    if ( have_posts() ) :
      yumag_section_setup_postdata();
  ?>

<!-- 1/3 panel [left text] -->
<tr>
<td>

<table align="center" border="0" cellpadding="0" cellspacing="0" class="table600" style="width: 600px;">
  <tbody>
    <tr>
      <td height="40">&nbsp;</td>
    </tr>
    <tr>
      <td>
        <table align="right" border="0" cellpadding="0" cellspacing="0" class="table2-2" style="width: 183px;">
          <!-- img -->
          <tbody>
            <tr>
              <td><?php yumag_email_entry_image( 'yumag-email-2', 'img1' ); ?></td>
            </tr>
            <!-- end img -->
          </tbody>
        </table>
        <!--Space-->
        <table align="right" border="0" cellpadding="0" cellspacing="0" style="width: 1px; height: 20px;">
          <tbody>
            <tr>
              <td style="font-size: 0; line-height: 0; border-collapse: collapse;" height="20">
                <p style="padding-left: 24px;">&nbsp;</p>
              </td>
            </tr>
          </tbody>
        </table>
        <!--End Space-->
        <table align="left" border="0" cellpadding="0" cellspacing="0" class="table2-2" style="width: 390px;">
          <!-- title -->
          <tbody>
            <tr align="left" valign="top">
              <td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 18px; font-weight: bold; color: <?php echo "#$colour"; ?>;"><?php the_title(); ?></td>
            </tr>
            <!-- end title -->
            <tr>
              <td height="10">&nbsp;</td>
            </tr>
            <!-- content -->
            <tr align="left" valign="top">
              <td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 13px; color: #7f8c8d; line-height: 24px;"><?php
                if ( function_exists( 'the_subtitle' ) && ( the_subtitle( '', '', false ) ) ) {
                  the_subtitle();
                } else {
                  the_excerpt();
                }
              ?></td>
            </tr>
            <!-- end content -->
            <tr>
              <td height="18">&nbsp;</td>
            </tr>
            <tr>
              <td align="left">
                <table align="left" bgcolor="<?php echo "#$colour"; ?>" border="0" cellpadding="0" cellspacing="0" class="button" style="border-radius: 3px; width: 90px;">
                  <tbody>
                    <tr>
                      <td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 11px; color: #21b6ae;" align="center" height="30"><a style="color: #ffffff;" href="<?php the_permalink(); ?>">Read more</a></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>
</td>
</tr>
<!-- end 1/3 panel [left text] -->

  <?php endif; ?>

  <!--
    POST 11
    -->

  <?php /* The Loop */
    if ( have_posts() ) {
      do {
        yumag_section_the_post();
      } while ( have_posts() && in_category( 'back-page', $post->ID ) );
    }

    if ( have_posts() ) :
      yumag_section_setup_postdata();
  ?>


<!-- 1/3 panel [right text] -->
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
  <tbody>
    <tr>
      <td height="40">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#f8f8f8">
        <table align="center" bgcolor="#f9f9f9" border="0" cellpadding="0" cellspacing="0" class="table600" style="width: 600px;">
          <tbody>
            <tr>
              <td height="40">&nbsp;</td>
            </tr>
            <tr>
              <td>
                <table align="left" border="0" cellpadding="0" cellspacing="0" class="table2-2" style="width: 183px;">
                  <!-- img -->
                  <tbody>
                    <tr>
                      <td><?php yumag_email_entry_image( 'yumag-email-2', 'img1' ); ?></td>
                    </tr>
                    <!-- end img -->
                  </tbody>
                </table>
                <!--Space-->
                <table align="left" border="0" cellpadding="0" cellspacing="0" style="width: 1px; height: 20px;">
                  <tbody>
                    <tr>
                      <td style="font-size: 0; line-height: 0; border-collapse: collapse;" height="20">
                        <p style="padding-left: 24px;">&nbsp;</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <!--End Space-->
                <table align="right" border="0" cellpadding="0" cellspacing="0" class="table2-2" style="width: 390px;">
                  <!-- title -->
                  <tbody>
                    <tr>
                      <td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 18px; font-weight: bold; color: <?php echo "#$colour"; ?>;" align="left"><?php the_title(); ?></td>
                    </tr>
                    <!-- end title -->
                    <tr>
                      <td height="10">&nbsp;</td>
                    </tr>
                    <!-- content -->
                    <tr>
                      <td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 13px; color: #7f8c8d; line-height: 24px;" align="left" valign="top"><?php
                        if ( function_exists( 'the_subtitle' ) && ( the_subtitle( '', '', false ) ) ) {
                          the_subtitle();
                        } else {
                          the_excerpt();
                        }
                      ?></td>
                    </tr>
                    <!-- end content -->
                    <tr>
                      <td height="18">&nbsp;</td>
                    </tr>
                    <!-- button -->
                    <tr>
                      <td align="left">
                        <table border="0" cellpadding="0" cellspacing="0" style="width: 180px;">
                          <tbody>
                            <tr>
                              <td>
                                <table align="center" bgcolor="<?php echo "#$colour"; ?>" border="0" cellpadding="0" cellspacing="0" class="button" style="border-radius: 3px; width: 90px;">
                                  <tbody>
                                    <tr>
                                      <td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 11px; color: #21b6ae;" align="center" height="30"><a style="color: #ffffff;" href="<?php the_permalink(); ?>">Read more</a></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <!-- end button -->
                  </tbody>
                </table>
              </td>
            </tr>
            <tr>
              <td height="40">&nbsp;</td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>
</td>
</tr>
<!-- end 1/3 panel [right text] -->

  <?php endif; ?>

<?php /* The Loop */
	$rightside = false;

	while ( have_posts() ) :
		yumag_section_the_post();
		if ( ! in_category( 'back-page', $post->ID ) ) :
			yumag_section_setup_postdata();
?>

<!-- 1/3 panel [left text] -->
<tr>
<td>

<?php if ( $rightside ) : ?>

<table align="center" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
  <tbody>
    <tr>
      <td height="40">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#f8f8f8">
        <table align="center" bgcolor="#f9f9f9" border="0" cellpadding="0" cellspacing="0" class="table600" style="width: 600px;">
          <tbody>
            <tr>
              <td height="40">&nbsp;</td>
            </tr>
            <tr>
              <td>
                <table align="left" border="0" cellpadding="0" cellspacing="0" class="table2-2" style="width: 183px;">
                  <!-- img -->
                  <tbody>
                    <tr>
                      <td><?php yumag_email_entry_image( 'yumag-email-2', 'img1' ); ?></td>
                    </tr>
                    <!-- end img -->
                  </tbody>
                </table>
                <!--Space-->
                <table align="left" border="0" cellpadding="0" cellspacing="0" style="width: 1px; height: 20px;">
                  <tbody>
                    <tr>
                      <td style="font-size: 0; line-height: 0; border-collapse: collapse;" height="20">
                        <p style="padding-left: 24px;">&nbsp;</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <!--End Space-->
                <table align="right" border="0" cellpadding="0" cellspacing="0" class="table2-2" style="width: 390px;">
                  <!-- title -->
                  <tbody>
                    <tr>
                      <td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 18px; font-weight: bold; color: <?php echo "#$colour"; ?>;" align="left"><?php the_title(); ?></td>
                    </tr>
                    <!-- end title -->
                    <tr>
                      <td height="10">&nbsp;</td>
                    </tr>
                    <!-- content -->
                    <tr>
                      <td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 13px; color: #7f8c8d; line-height: 24px;" align="left" valign="top"><?php
                        if ( function_exists( 'the_subtitle' ) && ( the_subtitle( '', '', false ) ) ) {
                          the_subtitle();
                        } else {
                          the_excerpt();
                        }
                      ?></td>
                    </tr>
                    <!-- end content -->
                    <tr>
                      <td height="18">&nbsp;</td>
                    </tr>
                    <!-- button -->
                    <tr>
                      <td align="left">
                        <table border="0" cellpadding="0" cellspacing="0" style="width: 180px;">
                          <tbody>
                            <tr>
                              <td>
                                <table align="center" bgcolor="<?php echo "#$colour"; ?>" border="0" cellpadding="0" cellspacing="0" class="button" style="border-radius: 3px; width: 90px;">
                                  <tbody>
                                    <tr>
                                      <td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 11px; color: #21b6ae;" align="center" height="30"><a style="color: #ffffff;" href="<?php the_permalink(); ?>">Read more</a></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <!-- end button -->
                  </tbody>
                </table>
              </td>
            </tr>
            <tr>
              <td height="40">&nbsp;</td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>

<?php else : ?>

<table align="center" border="0" cellpadding="0" cellspacing="0" class="table600" style="width: 600px;">
  <tbody>
    <tr>
      <td height="40">&nbsp;</td>
    </tr>
    <tr>
      <td>
        <table align="right" border="0" cellpadding="0" cellspacing="0" class="table2-2" style="width: 183px;">
          <!-- img -->
          <tbody>
            <tr>
              <td><?php yumag_email_entry_image( 'yumag-email-2', 'img1' ); ?></td>
            </tr>
            <!-- end img -->
          </tbody>
        </table>
        <!--Space-->
        <table align="right" border="0" cellpadding="0" cellspacing="0" style="width: 1px; height: 20px;">
          <tbody>
            <tr>
              <td style="font-size: 0; line-height: 0; border-collapse: collapse;" height="20">
                <p style="padding-left: 24px;">&nbsp;</p>
              </td>
            </tr>
          </tbody>
        </table>
        <!--End Space-->
        <table align="left" border="0" cellpadding="0" cellspacing="0" class="table2-2" style="width: 390px;">
          <!-- title -->
          <tbody>
            <tr align="left" valign="top">
              <td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 18px; font-weight: bold; color: <?php echo "#$colour"; ?>;"><?php the_title(); ?></td>
            </tr>
            <!-- end title -->
            <tr>
              <td height="10">&nbsp;</td>
            </tr>
            <!-- content -->
            <tr align="left" valign="top">
              <td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 13px; color: #7f8c8d; line-height: 24px;"><?php
                if ( function_exists( 'the_subtitle' ) && ( the_subtitle( '', '', false ) ) ) {
                  the_subtitle();
                } else {
                  the_excerpt();
                }
              ?></td>
            </tr>
            <!-- end content -->
            <tr>
              <td height="18">&nbsp;</td>
            </tr>
            <tr>
              <td align="left">
                <table align="left" bgcolor="<?php echo "#$colour"; ?>" border="0" cellpadding="0" cellspacing="0" class="button" style="border-radius: 3px; width: 90px;">
                  <tbody>
                    <tr>
                      <td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 11px; color: #21b6ae;" align="center" height="30"><a style="color: #ffffff;" href="<?php the_permalink(); ?>">Read more</a></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>

<?php endif; ?>

</td>
</tr>
<!-- end 1/3 panel [left text] -->

<?php
		$rightside = ! $rightside;

	endif;
endwhile;
?>

<!-- 1/1 content -->
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="table600" style="width: 600px;">
  <tbody>
    <tr>
      <td height="40">&nbsp;</td>
    </tr>
    <tr>
      <td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 28px; font-weight: bold; color: #ce99d5; padding-top: 20px;">The Back Page</td>
    </tr>
    <tr>
      <td height="10">&nbsp;</td>
    </tr>
    <tr>
      <td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 13px; color: #7f8c8d; line-height: 24px;" valign="top">The lighter side of York&hellip;</td>
    </tr>
  </tbody>
</table>
</td>
</tr>
<!-- end 1/1 content -->

<!-- Now go back and start the loop again, just with Back Page articles -->
<?php rewind_posts() ?>

<?php /* The Loop */
	$rightside = true;

	while ( have_posts() ) :
		yumag_section_the_post();
		if ( in_category( 'back-page', $post->ID ) ) :
			yumag_section_setup_postdata();
?>

<!-- 1/3 box [right text] -->
<tr>
<td>

<?php if ( $rightside ) : ?>

<table align="center" border="0" cellpadding="0" cellspacing="0" class="table600" style="width: 600px;">
  <tbody>
    <tr>
      <td height="40">&nbsp;</td>
    </tr>
    <tr>
      <td>
        <table align="left" border="0" cellpadding="0" cellspacing="0" class="table3-3" style="width: 183px;">
          <!-- img -->
          <tbody>
            <tr>
              <td><?php yumag_email_entry_image( 'yumag-email-2', 'img1' ); ?></td>
            </tr>
            <!-- end img -->
          </tbody>
        </table>
        <table align="right" bgcolor="#ecf0f1" border="0" cellpadding="0" cellspacing="0" class="table3-3" style="width: 392px;">
          <tbody>
            <tr>
              <td height="30">&nbsp;</td>
            </tr>
            <tr>
              <td>
                <table align="center" border="0" cellpadding="0" cellspacing="0" class="table-inner" style="width: 342px;">
                  <!-- content -->
                  <tbody>
                    <tr align="left">
                      <td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 13px; color: #7f8c8d; line-height: 24px;"><strong><?php the_title(); ?></strong> <?php
                        if ( function_exists( 'the_subtitle' ) && ( the_subtitle( '', '', false ) ) ) {
                          the_subtitle();
                        } else {
                          the_excerpt();
                        }
                      ?> <strong><a style="color: #ce99d5;" href="<?php the_permalink(); ?>">Read&nbsp;more</a></strong>.</td>
                    </tr>
                    <!-- end content -->
                  </tbody>
                </table>
              </td>
            </tr>
            <tr>
              <td style="font-size: 0px; line-height: 0px;" align="center" valign="bottom" height="30"><img alt="img" height="10" src="http://www.yorkspace.net/image/yu_header-bottom-point.png" style="display: block; font-size: 0px; line-height: 0px;" width="25" /></td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>

<?php else : ?>

<table align="center" border="0" cellpadding="0" cellspacing="0" class="table600" style="width: 600px;">
  <tbody>
    <tr>
      <td height="40">&nbsp;</td>
    </tr>
    <tr>
      <td>
        <table align="right" border="0" cellpadding="0" cellspacing="0" class="table3-3" style="width: 183px;">
          <!-- img -->
          <tbody>
            <tr>
              <td><?php yumag_email_entry_image( 'yumag-email-2', 'img1' ); ?></td>
            </tr>
            <!-- end img -->
          </tbody>
        </table>
        <table align="left" bgcolor="#ecf0f1" border="0" cellpadding="0" cellspacing="0" class="table3-3" style="width: 392px;">
          <tbody>
            <tr>
              <td height="30">&nbsp;</td>
            </tr>
            <tr>
              <td>
                <table align="center" border="0" cellpadding="0" cellspacing="0" class="table-inner" style="width: 342px;">
                  <!-- content -->
                  <tbody>
                    <tr align="left">
                      <td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 13px; color: #7f8c8d; line-height: 24px;"><strong><?php the_title(); ?></strong> <?php
                        if ( function_exists( 'the_subtitle' ) && ( the_subtitle( '', '', false ) ) ) {
                          the_subtitle();
                        } else {
                          the_excerpt();
                        }
                      ?> <strong><a style="color: #ce99d5;" href="<?php the_permalink(); ?>">Read&nbsp;more</a></strong>.</td>
                    </tr>
                    <!-- end content -->
                  </tbody>
                </table>
              </td>
            </tr>
            <tr>
              <td style="font-size: 0px; line-height: 0px;" align="center" valign="bottom" height="30"><img alt="img" height="10" src="http://www.yorkspace.net/image/yu_header-bottom-point.png" style="display: block; font-size: 0px; line-height: 0px;" width="25" /></td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>

<?php endif; ?>

</td>
</tr>
<!-- end 1/3 panel [left text] -->

<?php
		$rightside = ! $rightside;

	endif;
endwhile;
?>


<!-- 1/1 panel -->
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="table600" style="width: 600px;">
	<tbody>
		<tr>
			<td height="40">&nbsp;</td>
		</tr>
		<tr>
			<td bgcolor="#ecf0f1">
				<table align="center" border="0" cellpadding="0" cellspacing="0" class="table-inner" style="width: 540px;">
					<tbody>
						<tr>
							<td height="15">&nbsp;</td>
						</tr>
						<!-- content -->
						<tr>
							<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 13px; color: #7f8c8d; line-height: 24px;" valign="top"><strong><a style="color: #c1aa99" href="<?php echo esc_url( home_url( '/on-the-grapevine/' ) ); ?>">On the grapevine</a></strong> - read news and updates from fellow graduates and retired staff in this popular section. Don't forget to <strong><a style="color: #c1aa99" href="https://uoysurvey.typeform.com/to/d4nvDh">submit your own news!</a></strong></td>
						</tr>
						<!-- end content -->
						<tr>
							<td height="15">&nbsp;</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>
</td>
</tr>
<!-- end 1/1 panel -->
<!-- footer -->
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
	<tbody>
		<tr>
			<td align="center" height="40">&nbsp;</td>
		</tr>
		<tr>
			<td align="center" bgcolor="#ecf0f1" height="50">
				<table align="center" border="0" cellpadding="0" cellspacing="0" style="width: 245px;">
					<tbody>
						<tr>
							<td align="center" height="20">
								<a href="https://www.facebook.com/yorkalumniassoc"> <img alt="social-icon" height="16" src="http://www.yorkspace.net/image/yu_facebook.png" width="8" /> </a>
							</td>
							<td width="12">&nbsp;</td>
							<td align="center">
								<a href="https://twitter.com/YorkAlumni"> <img alt="social-icon" height="13" src="http://www.yorkspace.net/image/yu_twitter.png" width="16" /> </a>
							</td>
							<td width="12">&nbsp;</td>
							<td align="center">
								<a href="http://www.linkedin.com/groupInvitation?groupID=35311&amp;sharedKey=06B2A3691B39"> <img alt="social-icon" height="15" src="http://www.yorkspace.net/image/yu_linkedin.png" width="15" /> </a>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
		<tr bgcolor="<?php echo "#$colour"; ?>">
			<td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 11px; color: #ffffff; text-align: center;" align="center" valign="middle" height="50">
				<p>You are receiving this email because you are an alumnus/a, retired staff, friend or donor of the University of York<a href="target=&amp;pid=1601&amp;did=0&amp;tab=0"  style="color: <?php echo "#$colour"; ?>;">.</a> <br /><a href="target=&amp;pid=1585&amp;did=0&amp;tab=0" style="color: #fffffe;">Update your email preferences</a> | <a href="http://www.yorkspace.net/about/data-protection" style="color: #fffffe;">Privacy Policy and Data Protection</a></p>
				<p>Your Alumni Reference Number is:&nbsp;<img src="https://www.yorkspace.net/insertField.field?id=120&amp;nmode=0&amp;name=ID&amp;type=1" style="cursor: move;" title="Back-office constituent ID" data-runat="server" data-fieldid="120" data-attribid="0" data-searchable="0" data-fieldname="ID" data-fieldtype="1" data-htmlencode="True" data-isloop="False" /></p>
				<p style="font-size: 12px; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;"><strong><a style="color: #fffffe;" href="https://www.yorkspace.net/emailpreferences">Unsubscribe from this mailing list</a></strong> <span style="color: #fffffe;" href="https://www.yorkspace.net/about/data-protection">|</span> <strong><a style="color: #fffffe;" href="target=&amp;pid=1551&amp;did=0&amp;tab=0">Data Protection and Privacy</a></strong></p>
			</td>
		</tr>
	</tbody>
</table>
</td>
</tr>
<!-- end footer -->
</tbody>
</table>
<?php
endif; // if have_posts
