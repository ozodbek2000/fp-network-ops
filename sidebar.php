<aside class="sidebar">
	<div class="sidebar__wrapper">
		<div class="sidebar__logo">
			<a href="<?= get_home_url(); ?>"
				><img src="<?= bloginfo("template_url"); ?>/assets/img/webp/logo.webp" alt="logo" />
			</a>
		</div>
		<div class="sidebar__search mobile-only">
			<img src="<?= bloginfo("template_url"); ?>/assets/img/svg/search-blue.svg" alt="search" />
		</div>
		<div class="header__burger mobile-only">
			<span></span>
		</div>
		<div class="header__list_search mobile-only sidebar-search">
			<div class="header__list_search-wrapper">
				<input
					placeholder="Поиск"
					name="search"
					type="search"
				/>
				<img
					class="search-close"
					src="<?= bloginfo("template_url"); ?>/assets/img/svg/input-close.svg"
					alt="input-close"
				/>
			</div>
		</div>
	</div>
	<nav class="sidebar__nav">
		<ul class="sidebar__list">
			<li class="sidebar__list_item">
				<a href="##">Проектирование и внедрение</a>
			</li>
			<li class="sidebar__list_item">
				<a href="##"
					><span>Системы связи</span>
					<svg
						width="24"
						height="24"
						viewBox="0 0 24 24"
						fill="none"
						xmlns="http://www.w3.org/2000/svg"
					>
						<path
							d="M9 18L15 12L9 6"
							stroke="#253E70"
							stroke-linecap="round"
							stroke-linejoin="round"
						/>
					</svg>
				</a>
				<ul class="sidebar__list-2 <?= (is_page(9)) ? 'fixed' : ''; ?>">
					<li class="sidebar__list_menu mobile-only">
						<img
							src="<?= bloginfo("template_url"); ?>/assets/img/svg/chevron-left.svg"
							alt="chevron-left"
						/>
						<span>Меню</span>
					</li>
					<h3>Системы связи</h3>
					<li class="sidebar__list_item-2">
						<a href="##">TDM телефония</a>
					</li>
					<li class="sidebar__list_item-2 <?= (is_page(9)) ? 'fixed' : ''; ?>">
						<a href="<?= get_permalink(9); ?>">IP телефония</a>
					</li>
					<li class="sidebar__list_item-2">
						<a href="##">Запись переговоров</a>
					</li>
					<li class="sidebar__list_item-2">
						<a href="##">PMTC</a>
					</li>
					<li class="sidebar__list_item-2">
						<a href="##">ГГС</a>
					</li>
					<li class="sidebar__list_item-2">
						<a href="##">Системы оповещения</a>
					</li>
				</ul>
			</li>
			<li class="sidebar__list_item">
				<a href="##"
					><span>Сети передачи данных</span>
					<svg
						width="24"
						height="24"
						viewBox="0 0 24 24"
						fill="none"
						xmlns="http://www.w3.org/2000/svg"
					>
						<path
							d="M9 18L15 12L9 6"
							stroke="#253E70"
							stroke-linecap="round"
							stroke-linejoin="round"
						/>
					</svg>
				</a>
				<ul class="sidebar__list-2">
					<li class="sidebar__list_menu mobile-only">
						<img
							src="<?= bloginfo("template_url"); ?>/assets/img/svg/chevron-left.svg"
							alt="chevron-left"
						/>
						<span>Меню</span>
					</li>
					<h3>Сети передачи данных</h3>
					<li class="sidebar__list_item-2">
						<a href="##">MPLS</a>
					</li>
					<li class="sidebar__list_item-2">
						<a href="##">SDH</a>
					</li>
					<li class="sidebar__list_item-2">
						<a href="##">СКС</a>
					</li>
				</ul>
			</li>
			<li class="sidebar__list_item">
				<a href="##">Системы управляемого доступа (СКУД)</a>
			</li>
			<li class="sidebar__list_item">
				<a href="##">Видеонаблюдение</a>
			</li>
			<li class="sidebar__list_item">
				<a href="##">Охрана периметра</a>
			</li>
			<li class="sidebar__list_item">
				<a href="##">Источник бесперебойного питания (ИБП)</a>
			</li>
			<li class="sidebar__list_item">
				<a href="##"
					><span>Пожарная сигнализация и пожаротушение</span>
					<svg
						width="24"
						height="24"
						viewBox="0 0 24 24"
						fill="none"
						xmlns="http://www.w3.org/2000/svg"
					>
						<path
							d="M9 18L15 12L9 6"
							stroke="#253E70"
							stroke-linecap="round"
							stroke-linejoin="round"
						/>
					</svg>
				</a>
				<ul class="sidebar__list-2">
					<li class="sidebar__list_menu mobile-only">
						<img
							src="<?= bloginfo("template_url"); ?>/assets/img/svg/chevron-left.svg"
							alt="chevron-left"
						/>
						<span>Меню</span>
					</li>
					<h3>Пожарная сигнализация и пожаротушение</h3>
					<li class="sidebar__list_item-2">
						<a href="##">Аналоговые</a>
					</li>
					<li class="sidebar__list_item-2">
						<a href="##">Адресные</a>
					</li>
					<li class="sidebar__list_item-2">
						<a href="##">Модульное</a>
					</li>
					<li class="sidebar__list_item-2">
						<a href="##">Газовое</a>
					</li>
					<li class="sidebar__list_item-2">
						<a href="##">Порошковое</a>
					</li>
					<li class="sidebar__list_item-2">
						<a href="##">Водяное</a>
					</li>
				</ul>
			</li>
		</ul>
	</nav>
</aside>
<div class="sidebar__overlay"></div>