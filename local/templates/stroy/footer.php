<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
        </main>
		<div class="footer">
			<div class="innerFooter">
				<div class="mainContentFooter">
					<!-- logo -->
					<p class="boxLogo boxLogoFooter">
						<a  href='/'
							class="linkLogo"
						>
							<img src="<?=DEFAULT_TEMPLATE_PATH_IMG?>/images/logo_footer.png" alt="logo"/>
						</a>
					</p>
					<!-- list with content -->
					<ul class="listContentFooter">
						<li class="itemContentFooter navFooter">
							<h3 class="footerHeading">
								Навигация
							</h3>
							<?
							$APPLICATION->IncludeComponent(
								"bitrix:menu", 
								"menu_bottom", 
								array(
									"ALLOW_MULTI_SELECT" => "N",
									"CHILD_MENU_TYPE" => "left",
									"DELAY" => "N",
									"MAX_LEVEL" => "1",
									"MENU_CACHE_GET_VARS" => array(
									),
									"MENU_CACHE_TIME" => "3600",
									"MENU_CACHE_TYPE" => "N",
									"MENU_CACHE_USE_GROUPS" => "Y",
									"ROOT_MENU_TYPE" => "bottom",
									"USE_EXT" => "N",
									"COMPONENT_TEMPLATE" => "menu_bottom"
								),
								false
							);
							?>
						</li>
						<li class="itemContentFooter detailsFooter">
							<h3 class="footerHeading">
								Юридические реквизиты
							</h3>
							
							<ul class='listDetails'>
								<li class="itemDetails">
									<span>ИНН: 2801225176</span>
								</li>
								<li class="itemDetails">
									<span>КПП: 280101001</span>
								</li>
								<li class="itemDetails">
									<span>ОГРН: 1162801061983</span>
								</li>
							</ul>
						</li>
						<li class="itemContentFooter documents">
							<h3 class="footerHeading">
								Документы
							</h3>

							<ul class='listDocuments'>
								<li class="itemDocuments">
									<a  href="#"
										class="linkDocument"
									>
										Согласие на обработку персональных данных
									</a>
								</li>
								<li class="itemDocuments">
									<a  href="#"
										class="linkDocument"
									>
										Политика конфиденциальности
									</a>
								</li>
							</ul>
						</li>
                	</ul>
				</div>
				<div class="copyright">
					<div class="copyrightFirst">
						<span>© 2025</span>
						<span>|</span>
						<span class="rights">Все права защищены</span>
					</div>
					<div class="copyrightsSpot">
						Сделано в DarkStudio
					</div>
				</div>
			</div>
		</div>
</div>
		<!-- scripts -->
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
	</body>
</html>