<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>


<div class="full-screen__logo" id="scroll-top"> <img src="<?php bloginfo('template_url'); ?>/assets/images/logo-vodokanal.webp" alt='Логотип "КП" Водоканал'> </div>
<!-- убрать БР! -->
<div class="full-screen__subtitle"> Виконавчий комітет Запорізької міської ради <br> Комунальне підприємство </div>
<div class="full-screen__title">
   <h1>"ВОДОКАНАЛ"</h1>
</div>

<div class="full-screen__cards">
   <div class="screen__block-container">
      <div class="screen__block">
         <div class="block__title">ДЛЯ НАСЕЛЕННЯ</div>
         <div class="block__item">
            <div class="item__button"> <a href="https://cpp.vodokanal.zp.ua/" class="button" target="_blank">ОСОБИСТИЙ КАБІНЕТ</a></div>
            <div class="item__link">
               <!-- <a href="#">Передати показання</a> -->
               <a href="#storinkaSpojivacha" class="yakor">Сторінка споживача</a>
               <a href="#">Для нового споживача</a>
               <a href="#">Питання та відповіді</a>
               <a href="#dodatkoviPoslugi" class="yakor">Додаткові послуги</a>
               <a target="_blank" href="https://1580.zp.gov.ua/">Посилання на 15-80</a>
            </div>
         </div>
      </div>
   </div>
   <div class="screen__block-container">
      <div class="screen__block">
         <div class="block__title">Для юридичних осіб</div>
         <div class="block__item">
            <div class="item__button"> <a href="https://cent.vodokanal.zp.ua/enterprises/login" class="button" target="_blank">ОСОБИСТИЙ КАБІНЕТ</a></div>
            <div class="item__link">
               <a href="#">Для нового споживача</a>
               <a href="#dodatkoviPoslugi" class="yakor">Додаткові послуги</a>
               <a target="_blank" href="https://1580.zp.gov.ua/">Посилання на 15-80</a>
            </div>
         </div>
      </div>
   </div>
</div>

</div>

<video autoplay muted loop preload="auto" class="full-screen__video">
   <source src="video/background-video/test_video_fon.webm" type="video/webm">
   <source src="video/background-video/test_video_fon.mp4" type="video/mp4">
</video>

</div>

<!-- ***************************** Раздел "Сторінка споживача" ************************************ -->
<div class="content__container">
   <div class="storinka-spojivacha">
      <div class="spojivach__title">
         <h2 id="storinkaSpojivacha">Сторінка споживача</h2>
      </div>
      <div class="spojivach__container">
         <div class="spojivach__block">
            <div class="spojivach__card">
               <div class="spojivach-card__icon"><img src="<?php bloginfo('template_url'); ?>/assets/images/icon/Dovidkova_Info.svg" alt=""></div>
               <div class="spojivach-card__title">Довідкова інформація</div>
               <div class="spojivach-card__text">
                  <ul>
                     <li>Договір розстрочки</li>
                     <li>Зміни по особовому рахунку</li>
                     <li>Перерахунок при відсутності особи</li>
                     <li>Коригування оплати</li>
                     <li>Довідка про заборгованість</li>
                     <li>Об’єднання особових рахунків</li>
                     <li>Перелік заявок до Інформцентру</li>
                  </ul>
               </div>
               <div class="spojivach-card__button"><a href="#popup__Dovidkova-Info" class="button-card popup-link">Детальніше</a></div>
            </div>
            <div class="spojivach__card">
               <div class="spojivach-card__icon"><img src="<?php bloginfo('template_url'); ?>/assets/images/icon/Publ_Dogovor.svg" alt=""></div>
               <div class="spojivach-card__title">Публічні договори</div>
               <div class="spojivach-card__text">
                  <ul>
                     <li>ПОВІДОМЛЕННЯ від 01.03.2020 року про укладання ІНДИВІДУАЛЬНОГО ДОГОВОРУ</li>
                     <br>
                     <li>Рішення Запорізької міскої ради №49 від 25.03.2020р.</li>
                  </ul>
               </div>
               <div class="spojivach-card__button"><a href="#popup__Publ-Dogovor" class="button-card popup-link">Детальніше</a></div>
            </div>
            <div class="spojivach__card">
               <div class="spojivach-card__icon"><img src="<?php bloginfo('template_url'); ?>/assets/images/icon/Komer_Oblik.svg" alt=""></div>
               <div class="spojivach-card__title">Комерційний облік</div>
               <div class="spojivach-card__text">
                  <ul>
                     <li>Анкета для підключення нового модему</li>
                     <br>
                     <li>Адреси будинків, за якими КП «Водоканал» має намір
                        оснастити водопровідні вводи вузлами комерційного обліку </li>
                  </ul>
               </div>
               <div class="spojivach-card__button"><a href="#popup__Komer-Oblik" class="button-card popup-link">Детальніше</a></div>
            </div>
            <div class="spojivach__card">
               <div class="spojivach-card__icon"><img src="<?php bloginfo('template_url'); ?>/assets/images/icon/Normi.svg" alt=""></div>
               <div class="spojivach-card__title">Норми</div>
               <div class="spojivach-card__text">
                  <p>Питомі норми споживання питної води.</p>
               </div>
               <div class="spojivach-card__button"><a href="#popup__Normi" class="button-card popup-link">Детальніше</a></div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- ***************************** popUp для раздела "Сторінка споживача" ************************************ -->
<div id="popup__Dovidkova-Info" class="popup">
   <div class="popup__body">
      <div class="popup__content">
         <a href="#header" class="popup__close close-popup">+</a>
         <div class="popup__title">Довідкова інформація</div>
         <div class="popup__text">
            <div class="widget-show">
               <button class="collapsible">Договір розстрочки</button>
               <div class="hidden-widget">
                  <p></p>
                  <p>Для укладання з КП «Водоканал» «Договору про розстрочку сплати заборгованості за надані послуги з централізованого
                     водопостачання та централізованого водовідведення» Споживач особисто звертається до відділу по роботі зі споживачами
                     управління зі збуту за адресою: вул. Святого Миколая, 73 та надає документи (копії та оригінали для звіряння):</p>
                  <ul>
                     <li>паспорту <span style="color: red;">(может просто "паспорт" ?)</span> та ІПН</li>
                     <li>квитанції про сплату частини заборгованості</li>
                  </ul>
                  <p></p>
                  <p>Якщо Договір бажає укласти особа, на яку не відкрито особовий рахунок, але яка зареєстрована за даною адресою,
                     необхідно додатково надати:</p>
                  <ul>
                     <li>паспорт та ІПН особи, яка бажає укласти договір</li>
                     <li>дозвіл на укладання Договору від особи, на яку відкрито особовий рахунок</li>
                  </ul>
                  <p></p>
               </div>
            </div>

            <div class="widget-show">
               <p class="bold">Внесення змін до особового рахунку</p>
               <p>Для внесення змін до особового рахунку необхідно надати звернення та документи <a target="_blank" href="contacts.html">служби реалізації</a>,
                  поштою (69002, м. Запоріжжя, вул. Святого Миколая, 61) або на електронну пошту info.vodokanal@zp.gov.ua</p>
               <p></p>
               <button class="collapsible">Переоформлення особового рахунку (зміна власника квартири/приватного будинку)</button>
               <div class="hidden-widget">
                  <p></p>
                  <p>Перелік документів (копії та оригінали для звіряння):</p>
                  <ul>
                     <li>документи, що підтверджують право власності на квартиру/будинок (договір купівлі-продажу, договір дарування тощо)</li>
                     <li>витяг з державного реєстру речових прав на нерухоме майно про реєстрацію права власності</li>
                     <li>паспорт та ІПН власника/співвласника(ів) квартири/будинку</li>
                     <li>письмова згода співвласника/ів (у разі наявності)</li>
                     <li>паспорти з відміткою про реєстрацію або довідка з департаменту реєстраційних послуг Запорізької міської ради всіх зареєстрованих осіб</li>
                     <li>у разі якщо квартира не приватизована – ордер або довідка райвиконком про укладання договору найму, з вказанням ПІБ особи</li>
                  </ul>
                  <p></p>
               </div>

               <p></p>

               <button class="collapsible">Об’єднання особових рахунків</button>
               <div class="hidden-widget">
                  <p></p>
                  <p>Перелік документів (копії та оригінали для звіряння):</p>
                  <ul>
                     <li>документи, що підтверджують право власності на квартиру/будинок (договір купівлі-продажу, договір дарування тощо)</li>
                     <li>витяг з державного реєстру речових прав на нерухоме майно про реєстрацію права власності</li>
                     <li>паспорт та ІПН власника/співвласника(ів) квартири/будинку</li>
                     <li>паспорти з відміткою про реєстрацію або довідка з департаменту реєстраційних послуг Запорізької міської ради всіх зареєстрованих осіб</li>
                  </ul>
                  <p></p>
               </div>

               <p></p>

               <button class="collapsible">Зміна кількості зареєстрованих осіб</button>
               <div class="hidden-widget">
                  <p></p>
                  <p>Перелік документів (копії та оригінали для звіряння):</p>
                  <ul>
                     <li>паспорт з відміткою про реєстрацію/зняття з реєстрації або довідка департаменту реєстраційних послуг Запорізької міської ради</li>
                     <li>якщо особу визнано померлою - свідоцтво про смерть</li>
                     <li>якщо особу визнано безвісті відсутньою - відповідне рішення</li>
                     <li>якщо особа мешкає без реєстрації - паспорт та ІПН Споживача та паспорт та ІПН особи, яка проживає без реєстрації</li>
                  </ul>
                  <p></p>
               </div>

               <p></p>

               <button class="collapsible">Зміна питомої норми споживання питної води</button>
               <div class="hidden-widget">
                  <p></p>
                  <p>Необхідно надати доступ для обстеження ступеню благоустрою.</p>
               </div>

               <p></p>

               <button class="collapsible">Зміна поливної площі присадибної ділянки</button>
               <div class="hidden-widget">
                  <p></p>
                  <p>Необхідно надати доступ для обстеження.</p>
               </div>
               <p></p>
            </div>

            <div class="widget-show">
               <button class="collapsible">Перерахунок за період тимчасової відсутності</button>
               <div class="hidden-widget">
                  <p></p>
                  <p>Рішенням виконавчого комітету Запорізької міської ради «Про порядок зменшення розміру плати за комунальні послуги в разі тимчасової
                     відсутності споживача та/або членів його сім'ї» від 24.03.2017р. №142 передбачено «Порядок зменшення розміру плати за комунальні послуги
                     в разі тимчасової відсутності споживача та/або членів його сім'ї за місцем реєстрації» <span style="color: red;">(потрібно посилання на рішення)</span>.</p>
                  <p>Необхідно надати звернення та документи згідно з Рішенням до <a target="_blank" href="contacts.html">служби реалізації</a>, поштою (69002, м. Запоріжжя, вул.
                     Святого Миколая, 61) або на електронну пошту info.vodokanal@zp.gov.ua </p>
               </div>
            </div>

            <div class="widget-show">
               <button class="collapsible">Перерозподіл сплачених коштів</button>
               <div class="hidden-widget">
                  <p></p>
                  <p>Надати звернення до <a target="_blank" href="contacts.html">служби реалізації</a>. При собі мати документ, що підтверджує особу.</p>
               </div>
            </div>

            <div class="widget-show">
               <button class="collapsible">Довідка про заборгованість</button>
               <div class="hidden-widget">
                  <p></p>
                  <p>Звернутися до <a target="_blank" href="contacts.html">служби реалізації</a>. При собі мати документ, що підтверджує особу.</p>
                  <p>При на явності на абонентському обліку КП «Водоканал» приладу обліку холодної води необхідно надати доступ для зняття контрольних показань.</p>
               </div>
            </div>

            <div class="widget-show">
               <button class="collapsible">Заявки до Інформаційного центру</button>
               <div class="hidden-widget">
                  <p></p>
                  <p>Перелік питань для оформлення заявки:</p>
                  <ul>
                     <li>Зняття контрольних показань приладів обліку холодної води</li>
                     <li>Припис на проведення повірки приладів обліку холодної води</li>
                     <li>Зняття пломби у зв’язку з аварійною ситуацією</li>
                     <li>Дозвіл на заміну приладів обліку холодної води на новий (поломка тощо)</li>
                     <li>Прийняття приладів обліку холодної води на абонентський облік</li>
                     <li>Обстеження поливної площі присадибної ділянки</li>
                     <li>Визначення норми споживання питної води</li>
                  </ul>
                  <p></p>
                  <p>Звернутися за номерами (багатоканальних) телефонів:</p>
                  <ul>
                     <li>(061)214-9-214 (Міській номер)</li>
                     <li>067-622-32-14 (Київстар)</li>
                     <li>063-350-72-14 (Лайф)</li>
                     <li>099-012-02-14 (Водофон)</li>
                  </ul>
                  <p></p>
               </div>
            </div>
         </div>
         <div class="popup__button close-popup">
            <a href="#" class="button-popup">ЗАЧИНИТИ</a>
         </div>
      </div>
   </div>
</div>

<div id="popup__Publ-Dogovor" class="popup">
   <div class="popup__body">
      <div class="popup__content">
         <a href="#header" class="popup__close close-popup">+</a>
         <div class="popup__title">Публічні договори</div>
         <div class="popup__text">
            <button class="collapsible">ПОВІДОМЛЕННЯ від 01.03.2022 року про укладення ІНДИВІДУАЛЬНОГО ДОГОВОРУ
               про надання послуг з централізованого водопостачання та централізованого водовідведення, що є публічним договором приєднання</button>
            <div class="hidden-widget">
               <p></p>
               <ul>
                  <li><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">
                        ПОВІДОМЛЕННЯ від 01.03.2022 року для споживачів – власників (співвласників, користувачів) житлових приміщень в багатоквартирному
                        будинку про публічну пропозицію (оферту) КП «Водоканал»</a></li>
                  <li><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">
                        ПОВІДОМЛЕННЯ від 01.03.2022 року для споживачів – власників (користувачів) індивідуальних (садибних) житлових будинків про публічну
                        пропозицію (оферту) КП «Водоканал»</a></li>
                  <li><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">
                        ПОВІДОМЛЕННЯ від 01.03.2022 року для споживачів – власників (співвласників, користувачів) нежитлових приміщень в
                        багатоквартирному будинку про публічну пропозицію (оферту) КП «Водоканал»</a></li>
                  <li><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">
                        ПОВІДОМЛЕННЯ від 01.03.2022 року для колективних споживачів</a></li>
               </ul>
               <p></p>
            </div>
            <p></p>
            <p class="bold">Рішення Запорізької міської ради №49 від 25.03.2020р.</p>
            <p>Відповідно до Рішення Запорізької міської ради №49 від 25.03.2020р. «Про надання дозволу на укладення договору з індивідуальними споживачами»,
               з метою врегулювання договірних відносин зі споживачами, КП «Водоканал» пропонує ознайомитися з умовами Публічних договорів, які будуть укладені
               з власниками (співвласниками, користувачами) житлових і нежитлових приміщень в багатоквартирних будинках, що не визначилися з моделлю договірних
               відносин з КП «Водоканал», після спливу 5-ти місяців з дня завершення заходів щодо запобігання виникненню та поширенню коронавірусної хвороби
               COVID-19, а з власниками (співвласниками, користувачами) приватних домоволодінь - через 30-ть календарних днів з дати цієї публікації
               Публічного договору в газеті «Запорізька Січ».</p>
            <ul>
               <li><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">
                     Договір з індивідуальним споживачем-власником, користувачем житлового приміщення у будівлі</a></li>
               <li><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">
                     Договір з індивідуальним споживачем-власником, користувачем нежитлового приміщення у будівлі</a></li>
               <li><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">
                     Договір з індивідуальним споживачем-власником, користувачем приватного домоволодіння</a></li>
            </ul>
         </div>
         <div class="popup__button close-popup">
            <a href="#" class="button-popup">ЗАЧИНИТИ</a>
         </div>
      </div>
   </div>
</div>

<div id="popup__Komer-Oblik" class="popup">
   <div class="popup__body">
      <div class="popup__content">
         <a href="#header" class="popup__close close-popup">+</a>
         <div class="popup__title">Комерційний облік</div>
         <div class="popup__text">
            <div class="widget-show">
               <p>Для підключення нового модему до комерційного обліку системи збору даних показників з лічильника на сервер КП «Водоканал» необхідно заповнити форму за посиланням.</p>
               <div class="color__link-button">
                  <a class="form__komer-oblik" target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSdUpEEq6bQhYsEq1DCUeO32_52vIOWIf6q5vYChmga3NQNznw/viewform">ЗАПОВНИТИ ФОРМУ</a>
               </div>
            </div>

            <div class="widget-show">
               <p>Згідно з вимогами Закону України <a target="_blank" href="http://zakon.rada.gov.ua/laws/main/2119-19">«Про комерційний облік теплової енергії та водопостачання»</a> витрати на оснащення будівель
                  вузлами комерційного обліку, здійснені оператором зовнішніх інженерних мереж, відшкодовуються співвласниками будівель.</p>
               <p>Розмір внесків за встановлення комерційних вузлів обліку визначаються окремо для кожної будівлі. Сплата внесків розстрочується на п’ять років або на іншій строк
                  за згодою сторін. Для будівлі, де налічується два та більше споживачів, внески за встановлення вузлів комерційного обліку розподіляються пропорційно до кількості
                  приміщень, які є самостійними об’єктами нерухомого майна.</p>

               <button class="collapsible">Оператор зовнішніх інженерних мереж КП «Водоканал» м. Запоріжжя інформує мешканців про намір встановлення вузлів комерційного обліку за наступними адресами
                  (кожна адреса у таблиці містить активне посилання на зміст повідомлення за даною адресою).</button>
               <div class="hidden-widget">
                  <table>
                     <thead>
                        <tr>
                           <th style="width:12%;">Дата розміщення</th>
                           <th style="width:33%;">Адреса</th>
                           <th>Орієнтована вартість встановлення вузла комерційного обліку</th>
                           <th>Орієнтований розмір внесків за встановлення вузла комерційного обліку</th>
                        </tr>
                     </thead>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">Запорізька-Шкільна, 9б-28</a></td>
                        <td>199 144.26</td>
                        <td>46.10</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>136 831.63</td>
                        <td>23.76</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>23.76</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>23.92</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>30.01</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>116 628.55</td>
                        <td>47.80</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>39.40</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>18.11</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>20.36</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>28.58</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>21.34</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>17.12</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>21.49</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>21.49</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>29.12</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>124 625.26</td>
                        <td>24.34</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>36.00</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>17.19</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>21.64</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>21.64</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>186 937.88</td>
                        <td>28.76</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>199 144.26</td>
                        <td>31.02</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>46.23</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>31.38</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>199 144.26</td>
                        <td>35.18</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>43.27</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>31.38</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>136 831.63</td>
                        <td>47.51</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>18.55</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>28.85</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>28.58</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>21.79</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>43.27</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>21.19</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>69.24</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>31.67</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>47.51</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>136 831.63</td>
                        <td>38.22</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>97 484.20</td>
                        <td>21.96</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>165 900.01</td>
                        <td>29.63</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>21.34</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>41.65</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>22.25</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>57.70</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>124 625.26</td>
                        <td>35.01</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>124 625.26</td>
                        <td>41.00</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>20.91</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>21.05</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>25.13</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>124 625.26</td>
                        <td>41.54</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>55.64</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>124 625.26</td>
                        <td>41.82</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>20.91</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>58.31</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>48.60</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>71.11</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>47.80</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>116 628.55</td>
                        <td>97.19</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>153.46</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>48.60</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>199 144.26</td>
                        <td>39.83</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>199 144.26</td>
                        <td>46.31</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>120 626.90</td>
                        <td>24.03</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>28.04</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>40.50</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>27.00</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>40.50</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>39.94</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>186 937.88</td>
                        <td>28.94</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>40.50</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>40.50</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>124 625.26</td>
                        <td>28.85</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>124 625.26</td>
                        <td>21.71</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>30.27</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>57.01</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>21.64</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>178 941.18</td>
                        <td>36.08</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>130 728.44</td>
                        <td>30.83</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>20.36</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>38.01</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>85.52</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>36.78</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>36.39</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>31.97</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>28.58</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>31.67</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>31.38</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>116 628.55</td>
                        <td>41.07</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>21.49</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>15.91</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>30.55</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>50.27</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>364.46</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>124 625.26</td>
                        <td>42.97</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>130 728.44</td>
                        <td>36.11</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>136 831.63</td>
                        <td>31.67</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>12.91</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>182.23</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>182.23</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>94.06</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>17.31</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>44.43</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>23.78</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>31.67</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>47.51</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>27.15</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>47.51</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>27.15</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>23.92</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>32.27</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>83.43</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>31.67</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>20.53</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>28.85</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>21.64</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>27.00</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>49.42</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>27.00</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>27.00</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>14.29</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>31.47</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>28.27</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>31.67</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>25.54</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>26.51</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>21.38</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>44.51</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>21.25</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>11.64</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>44.51</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>29.75</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>161.98</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>43.27</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>21.64</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>364.46</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>19.77</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>31.67</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>193 041.07</td>
                        <td>24.75</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>48.60</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>40.50</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>194.38</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>32.80</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>124 625.26</td>
                        <td>34.62</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>186 937.88</td>
                        <td>46.73</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>124 625.26</td>
                        <td>46.16</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>23.92</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>136 831.63</td>
                        <td>28.63</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>242.98</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>364.46</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>59.50</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>36.45</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>132.53</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>38.01</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>136 831.63</td>
                        <td>79.55</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>72.89</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>74.76</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>205 247.45</td>
                        <td>49.10</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>25.33</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>22.58</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>23.78</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>21.64</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>57.01</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>224.29</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>23.78</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>25.96</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>30.85</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>25.96</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>25.54</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>36.00</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>22.51</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>48.68</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>31.16</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>28.99</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>155.49</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>31.38</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>47.51</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>23.76</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>24.26</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>35.27</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>31.38</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>97 484.20</td>
                        <td>18.12</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>76.02</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>77.89</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>18.69</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>42.88</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>40.50</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>120 626.90</td>
                        <td>33.69</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>36.00</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>124 625.26</td>
                        <td>24.53</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>28.58</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>136 831.63</td>
                        <td>38.01</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>31.38</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>199 144.26</td>
                        <td>42.55</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>136 831.63</td>
                        <td>36.78</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>31.38</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>136 831.63</td>
                        <td>39.78</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>23.92</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>24.97</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>13.06</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>10.46</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>130 728.44</td>
                        <td>27.35</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>30.82</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>45.01</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>171.51</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>136 831.63</td>
                        <td>43.30</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>136 831.63</td>
                        <td>23.51</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>364.46</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>182.23</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>364.46</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>25.96</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>36.91</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>32.76</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>39.94</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>58 314.28</td>
                        <td>40.50</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>22.91</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>21.64</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>178 941.18</td>
                        <td>35.65</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>21.79</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>120 626.90</td>
                        <td>25.56</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>124 625.26</td>
                        <td>29.25</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>21.94</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>17.12</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>124 625.26</td>
                        <td>21.27</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>21.64</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>25.96</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>25.96</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>120 626.90</td>
                        <td>31.09</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>116 628.55</td>
                        <td>38.36</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>21.64</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>21.79</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>28.85</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>23.08</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>21.64</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>124 625.26</td>
                        <td>31.63</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>21.05</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>36.01</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>43.27</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>29.96</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>38.46</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>29.96</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>38.46</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>43.27</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>21.49</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>25.54</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>62 312.63</td>
                        <td>17.31</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>136 831.63</td>
                        <td>31.38</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>136 831.63</td>
                        <td>39.55</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>199 144.26</td>
                        <td>46.31</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>136 831.63</td>
                        <td>31.97</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>136 831.63</td>
                        <td>24.88</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>29.75</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>68 415.82</td>
                        <td>17.63</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>136 831.63</td>
                        <td>39.55</td>
                     </tr>
                     <tr>
                        <td>06.04.2020</td>
                        <td><a href="#"></a></td>
                        <td>136 831.63</td>
                        <td>39.09</td>
                     </tr>
                  </table>
                  <p></p>
               </div>
            </div>
         </div>

         <div class="popup__button close-popup">
            <a href="#" class="button-popup">ЗАЧИНИТИ</a>
         </div>
      </div>
   </div>
</div>

<div id="popup__Normi" class="popup">
   <div class="popup__body">
      <div class="popup__content">
         <a href="#header" class="popup__close close-popup">+</a>
         <div class="popup__title">Питомі норми споживання питної води</div>
         <div class="popup__text">
            <p>Питомі норми споживання питної води затверджені<a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">
                  рішенням виконавчого комітету Запорізької міської ради від 29.03.2021 №96</a></p>
         </div>

         <div class="popup__button close-popup">
            <a href="#" class="button-popup">ЗАЧИНИТИ</a>
         </div>
      </div>
   </div>
</div>
<!-- ***************************** Раздел "Додаткові послуги" ************************************ -->
<div class="container__background-color">
   <div class="content__container">
      <div class="dodatkovi-poslugi">
         <div class="poslugi__title">
            <h2 id="dodatkoviPoslugi">Додаткові послуги</h2>
         </div>
         <div class="poslugi__container">
            <div class="poslugi__block">
               <div class="poslugi__card">
                  <div class="poslugi-card__icon"><img src="<?php bloginfo('template_url'); ?>/assets/images/icon/Priladi_Obliky.svg" alt=""></div>
                  <div class="poslugi-card__title">Повірка приладів обліку</div>
                  <div class="poslugi-card__text">
                     <ul>
                        <li>послуги з повірки лічильників води на місці експлуатації (без знаття)</li>
                        <li>послуги з повірки та ремонту лічильників води на стаціонарних установках</li>
                     </ul>
                  </div>
                  <div class="poslugi-card__button"><a href="#popup__Priladi-Obliky" class="button-card popup-link">Детальніше</a></div>
               </div>
               <div class="poslugi__card">
                  <div class="poslugi-card__icon"><img src="<?php bloginfo('template_url'); ?>/assets/images/icon/Rozrob_Proekt.svg" alt=""></div>
                  <div class="poslugi-card__title">Розробка проектної документації</div>
                  <div class="poslugi-card__text">
                     <p>Розробка:</p>
                     <ul>
                        <li>водогосподарського балансу і опитувального листа;</li>
                        <li>проекту з водопостачання і водовідведення;</li>
                        <li>схем балансової приналежності мереж.</li>
                     </ul>
                  </div>
                  <div class="poslugi-card__button"><a href="#popup__Rozrob-Proekt-Doc" class="button-card popup-link">Детальніше</a></div>
               </div>
               <div class="poslugi__card">
                  <div class="poslugi-card__icon"><img src="<?php bloginfo('template_url'); ?>/assets/images/icon/Pidkluch_Voda.svg" alt=""></div>
                  <div class="poslugi-card__title">Підключення до мереж</div>
                  <div class="poslugi-card__text">
                     <p>Підключення до:</p>
                     <ul>
                        <li>до мереж водопостачання;</li>
                        <li>до мереж водовідведення.</li>
                     </ul>
                  </div>
                  <div class="poslugi-card__button"><a href="#popup__Pidkluch-Voda" class="button-card popup-link">Детальніше</a></div>
               </div>
               <div class="poslugi__card">
                  <div class="poslugi-card__icon"><img src="<?php bloginfo('template_url'); ?>/assets/images/icon/Postachanay_Electro.svg" alt=""></div>
                  <div class="poslugi-card__title">Постачання електричної енергії</div>
                  <div class="poslugi-card__text">
                     <p>Продаж електричної енергії непобутовим споживачам.</p>
                  </div>
                  <div class="poslugi-card__button"><a href="#popup__Postachanay-Electrichestva" class="button-card popup-link">Детальніше</a></div>
               </div>
               <div class="poslugi__card">
                  <div class="poslugi-card__icon"><img src="<?php bloginfo('template_url'); ?>/assets/images/icon/Poslugi_Avto.svg" alt=""></div>
                  <div class="poslugi-card__title">Послуги автотранспорту</div>
                  <div class="poslugi-card__text">
                     <p>Надання послуг спеціалізованої техніки.</p>
                  </div>
                  <div class="poslugi-card__button"><a href="#popup__Poslugi-Avto" class="button-card popup-link">Детальніше</a></div>
               </div>
               <div class="poslugi__card">
                  <div class="poslugi-card__icon"><img src="<?php bloginfo('template_url'); ?>/assets/images/icon/TMC.svg" alt=""></div>
                  <div class="poslugi-card__title">Реалізація ТМЦ</div>
                  <div class="poslugi-card__text">
                     <p>Продаж неліквідних товарно-матеріальних цінностей.</p>
                  </div>
                  <div class="poslugi-card__button"><a href="#popup__TMC" class="button-card popup-link">Детальніше</a></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- ***************************** popUp для раздела "Додаткові послуги" ************************************ -->
<div id="popup__Priladi-Obliky" class="popup">
   <div class="popup__body">
      <div class="popup__content">
         <a href="#header" class="popup__close close-popup">+</a>
         <div class="popup__title">Повірка приладів обліку</div>
         <div class="popup__text">
            <p>Центральна лабораторія автоматики і вимірювань</p>
            <p class="bold">Підрозділ надає послуги з повірки лічильників води DN 15-20 мм на місці експлуатації (без зняття)</p>
            <p>Контактні телефони:</p>
            <ul>
               <li>(061)271-15-59, (061)289-02-35 (Міські номера)</li>
               <li>067-611-64-84 (Київстар)</li>
               <li>066-280-72-94 (Водафон)</li>
               <li>063-48-444-76 (Лайф)</li>
            </ul>
            <p class="bold">Послуги з підготовки до повірки, ремонту та повірки лічильників води DN 15-25 мм на стаціонарних установках</p>
            <p>Контактні телефони:</p>
            <ul>
               <li>(061)271-15-64, (061)289-42-32 (Міські номера)</li>
            </ul>
            <p>Адреса:</p>
            <ul>
               <li>вул. Святого Миколая, 61</li>
            </ul>
            <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">Вартість виконання робіт</a>
               за вищевказаними послугами юридичним та фізичним особам.</p>


            <button class="collapsible">Підприємства, з якими заключено договір про співпрацю при наданні послуг
               з державної повірки приладів обліку води, до яких Ви можете звернутися:</button>
            <div class="hidden-widget">
               <p></p>
               <p><span class="bold">ТОВ "Сервістехнологія"</span> - без демонтажу</p>
               <p>бул. Центральний 4, офіс 109</p>
               <ul>
                  <li>(061)233-99-09 (Міській номер)</li>
                  <li>067-610-44-23 (Київстар)</li>
                  <li>099-333-83-42 (Водофон)</li>
                  <li><a target="_blank" href="https://vodomer.zp.ua/">vodomer.zp.ua</a></li>
               </ul>
               <p><span class="bold">ФОП Закорецька Ю.В.</span> - без демонтажу</p>
               <ul>
                  <li>096-558-25-82 (Київстар)</li>
                  <li>095-626-85-31 (Водофон)</li>
               </ul>
               <p><span class="bold">ФОП Пятковська З.О.</span> - без демонтажу</p>
               <ul>
                  <li>063-738-44-50 (Лайф)</li>
                  <li>099-689-52-16 (Водофон)</li>
                  <li>097-624-24-71 (Київстар)</li>
                  <li><a target="_blank" href="https://vodovir.zp.ua/">vodovir.zp.ua</a></li>
               </ul>
               <p></p>
            </div>

         </div>
         <div class="popup__button close-popup">
            <a href="#" class="button-popup">ЗАЧИНИТИ</a>
         </div>
      </div>
   </div>
</div>

<div id="popup__Rozrob-Proekt-Doc" class="popup">
   <div class="popup__body">
      <div class="popup__content">
         <a href="#header" class="popup__close close-popup">+</a>
         <div class="popup__title">Розробка проектної документації</div>
         <div class="popup__text">
            <button class="collapsible">Для розробки водогосподарського балансу необхідно підготувати та надати
               до КП «Водоканал» наступнийперелік документів:</button>
            <div class="hidden-widget">
               <p></p>
               <p>Заяву на виконання водогосподарського балансу та опитувального листа з вихідними даними. Зразок заяви можна отримати
                  за посиланням <a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">ЗРАЗОК</a>.</p>
               <p>Документи що підтверджують право власності на будівлю, приміщення (витяг з реєстру права власності на нерухоме майно, договір купівлі-продажу
                  об’єкту нерухомості, акт приймання-передачі) або документи , що підтверджують право користування (рішення та акт про передачу майна, договір оренди).</p>
               <p class="bold">До вищезазначених документів необхідно додати:</p>
               <ul>
                  <li>юридичним особам:</li>
               </ul>
               <ol>
                  <li>Свідоцтво про реєстрацію юридичної особи або Виписку з єдиного державного реєстру юридичних осіб, фізичних осіб – підприємців та громадських формувань.</li>
                  <li>Довідку Головного управління статистики про включення до єдиного державного реєстру підприємств та організацій ЄДРПОУ(юридичної особи, філіалу) або Відомості з ЄРДПОУ.</li>
                  <li>Довідку про взяття на облік платника податків.</li>
                  <li>Статут або Положення.</li>
                  <li>Довіреність, наказ або інший документ, підтверджуючий повноваження керівника.</li>
                  <li>Розрахунковий рахунок з зазначенням назви банку.</li>
               </ol>
               <ul>
                  <li>фізичним особам-підприємцям:</li>
               </ul>
               <ol>
                  <li>Свідоцтво про реєстрацію фізичної особи або Виписку з єдиного державного реєстру фізичних осіб – підприємців.</li>
                  <li>Довідку про взяття на облік платника податків.</li>
                  <li>Паспорт громадянина України (реєстраційне посвідчення).</li>
                  <li>Картка платника податків (ідентифікаційний податковий номер).</li>
               </ol>
               <ul>
                  <li>фізичним особам:</li>
               </ul>
               <ol>
                  <li>Паспорт громадянина України (реєстраційне посвідчення).</li>
                  <li>Картка платника податків (ідентифікаційний податковий номер).</li>
               </ol>
               <p><span class="bold">Увага:</span> Всі надані копії документів, що надаються повинні бути завірені.
                  Документи на оформлення технічної документації приймаються від юридичної, фізичної особи або від
                  уповноваженої особи за наявності довіреності.</p>
            </div>
            <p></p>
            <button class="collapsible">Для виконання робочого проєкту та/або схеми балансової приналежності необхідно
               підготувати та надати до КП «Водоканал» наступний перелік документів:</button>
            <div class="hidden-widget">
               <p></p>
               <ol>
                  <li>Заяву на виконання робочого проєкта та/або схеми балансової приналежності мереж. Зразок заяви можна отримати за посиланням
                     <a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">ЗРАЗОК</a>.
                  </li>
                  <li>Для окремо розташованих об’єктів, копію плану ділянки на топографічній зйомці в масштабі 1:500 (кольорова) з нанесенням підземних комунікацій.</li>
                  <li>Для вбудованих, прибудованих (нежитлових приміщень) викопіювання з плану приміщень або виконавчі креслення робочого проекту.</li>
                  <li>Документи що підтверджують право власності на будівлю, приміщення (витяг з реєстру права власності на нерухоме майно, договір купівлі-продажу
                     об’єкту нерухомості, акт приймання-передачі) або документи , що підтверджують право користування (рішення та акт про передачу майна, договір оренди).</li>
                  <li>Акт на право постійного використання землі або договір оренди земельної ділянки(при намірі забудови земельної ділянки).</li>
                  <li>Раніше виконана схема розподілу (при наявності).</li>
               </ol>
               <p class="bold">До вищезазначених документів необхідно додати:</p>
               <ul>
                  <li>юридичним особам:</li>
               </ul>
               <ol>
                  <li>Свідоцтво про реєстрацію юридичної особи або Виписку з єдиного державного реєстру юридичних осіб, фізичних осіб – підприємців та громадських формувань.</li>
                  <li>Довідку Головного управління статистики про включення до єдиного державного реєстру підприємств та організацій ЄДРПОУ(юридичної особи, філіалу) або Відомості з ЄРДПОУ.</li>
                  <li>Довідку про взяття на облік платника податків.</li>
                  <li>Статут або Положення.</li>
                  <li>Довіреність, наказ або інший документ, підтверджуючий повноваження керівника.</li>
                  <li>Розрахунковий рахунок з зазначенням назви банку.</li>
               </ol>
               <ul>
                  <li>фізичним особам-підприємцям:</li>
               </ul>
               <ol>
                  <li>Свідоцтво про реєстрацію фізичної особи або Виписку з єдиного державного реєстру фізичних осіб – підприємців.</li>
                  <li>Довідку про взяття на облік платника податків.</li>
                  <li>Паспорт громадянина України (реєстраційне посвідчення).</li>
                  <li>Картка платника податків (ідентифікаційний податковий номер).</li>
               </ol>
               <ul>
                  <li>фізичним особам:</li>
               </ul>
               <ol>
                  <li>Паспорт громадянина України (реєстраційне посвідчення).</li>
                  <li>Картка платника податків (ідентифікаційний податковий номер).</li>
               </ol>
               <p><span class="bold">Увага:</span>Всі надані копії документів, що надаються повинні бути завірені.
                  Документи на оформлення технічної документації приймаються від юридичної, фізичної особи або від
                  уповноваженої особи за наявності довіреності.</p>
            </div>
         </div>
         <div class="popup__button close-popup">
            <a href="#" class="button-popup">ЗАЧИНИТИ</a>
         </div>
      </div>
   </div>
</div>

<div id="popup__Pidkluch-Voda" class="popup">
   <div class="popup__body">
      <div class="popup__content">
         <a href="#header" class="popup__close close-popup">+</a>
         <div class="popup__title">Підключення до мережі</div>
         <div class="popup__text">
            <p class="bold">Виробничо-експлуатаційний відділ</p>
            <p class="bold">Підрозділ надає додаткові послуги з підключення до міських мереж водопроводу і каналізації</p>
            <p class="bold">Для виконання робіт з підключення до міських мереж водопроводу і каналізації потужностями КП «Водоканал» необхідно:</p>
            <ul>
               <li>Надати до канцелярії підприємства або начальнику підрозділу, що виконуватиме роботи Заяву на підключення <a href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">ЗРАЗОК(не предоставили сам документ)</a>
                  <a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">Додаток 1</a>.
               </li>
               <li>В підрозділі, що виконуватиме роботи з підключення до міських мереж водопроводу і каналізації, отримати та (у разі згоди) сплатити рахунок за виконання робіт.</li>
               <li>Надати в підрозділ, що виконуватиме роботи з підключення до міських мереж водопроводу і каналізації, копію квитанції по оплату (отриману у п.2) з назвою банку.</li>
               <li>Після виконання робіт відповідним підрозділом, підписати Акт прийому – передачі виконаних робіт по підключенню до мереж.</li>
               <li>Додаток Акт на промивання і дезінфекцію (які дійсні 5 днів) <a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">Додаток 2</a>.</li>
            </ul>
            <p class="bold">Місцезнаходження начальників підрозділів, для підключення мереж водопостачання:</p>
            <ul>
               <li>Цех № 1 вул. Незалежної України, 39а</li>
               <li>Цех № 2 вул. Чумаченко, 13-в</li>
               <li>Цех № 3 вул. Іванова, 91</li>
               <li>Цех № 4 вул. Каховська, 28, вул. Козака Бабури, 14</li>
            </ul>
            <p class="bold">для підключення до мереж водовідведення:</p>
            <ul>
               <li>ЦМК вул. Дніпровська, 4</li>
            </ul>
         </div>
         <div class="popup__button close-popup">
            <a href="#" class="button-popup">ЗАЧИНИТИ</a>
         </div>
      </div>
   </div>
</div>

<div id="popup__Postachanay-Electrichestva" class="popup">
   <div class="popup__body">
      <div class="popup__content">
         <a href="#header" class="popup__close close-popup">+</a>
         <div class="popup__title">Постачання електричної енергії</div>
         <div class="popup__text">
            <p>Комунальне підприємство «Водоканал» пропонує постачання електричної енергії Споживачу на умовах комерційної пропозиції.</p>
            <p class="bold">Контакти колл-центру:</p>
            <ul>
               <li>69002, Запорізька обл., м. Запоріжжя, вул. Святого Миколая, 61</li>
               <li>Номери телефонів для звернення споживачів (063)848-20-66, (096)948-948-7</li>
               <li>Електронна пошта для прийому електронних повідомлень від споживачів voda.oge@vodokanal.zp.ua</li>
            </ul>
            <p class="bold">Режим роботи:</p>
            <span>понеділок - п'ятниця з 08:00 до 17:00</span>
            <p>перерва 12:00 - 12:45</p>
            <p class="bold">Перевагами співпраці з КП «Водоканал» є прозорість інформаційного середовища з питань електропостачання.
               Умови постачання електричної енергії споживачу:</p>
            <p>КП «Водоканал» має змогу здійснювати постачання електричної енергії споживачам які:</p>
            <ul>
               <li>приєднались до договору про надання послуг з розподілу електричної енергії</li>
               <li>не мають заборгованості за спожиту електричну енергію перед іншім постачальником або наявного договору реструктуризації такої заборгованості, умови якого виконуються належним чином</li>
               <li>за усіма точками комерційного обліку на об'єкті (об'єктах) споживача, за якими здійснюється постачання електричної енергії, укладено договір з постачальником послуг комерційного обліку про надання послуг з комерційного обліку електричної енергії</li>
            </ul>
            <button class="collapsible">Комерційні пропозиції з постачання електроенергії споживачу</button>
            <div class="hidden-widget">
               <p></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">Комерційна пропозиція на постачання електричної енергії</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">Заява-приєднання до Договору про постачання електричної енергії</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">Договір про постачання електричної енергії</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">Приклад рахунку за постачання електричної енергії</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">Порядок забезпечення стандартів якості електропостачання та надання компенсацій за їх недотримання</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">Умови припинення та відновлення електропостачання</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">Порядок подання звернень скарг та претензій щодо надання послуг з постачання електричної енергії</a></p>
               <p></p>
            </div>
            <p></p>
            <button class="collapsible">Посилання на нормативні акти</button>
            <div class="hidden-widget">
               <p></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">Урядовий портал (Єдиний веб-портал органів виконавчої ради)</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">Національна комісія, що здійснює державне регулювання у сферах енергетики та комунальних послуг</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">ПАТ «Запоріжжяобленерго» Оператор систему розподілу</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">АТ «Укрзалізниця» Оператор систему розподілу</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">ДП «Гарантований покупець» державне підприємство</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">ЗАКОН УКРАЇНИ «Про доступ до публічної інформації»</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">ЗАКОН УКРАЇНИ «Про звернення громадян»</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">ЗАКОН УКРАЇНИ «Про ліцензування видів господарської діяльності»</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">ЗАКОН УКРАЇНИ «Про захист персональних даних»</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">ЗАКОН УКРАЇНИ «Про захист прав споживачів»</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">ЗАКОН УКРАЇНИ «Про ціни і ціноутворення»</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">Кодекс законів про працю України</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">ЗАКОН УКРАЇНИ «Про Національну комісію, що здійснює державне регулювання у сферах енергетики та комунальних послуг»</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">ЗАКОН УКРАЇНИ «Про ринок електричної енергії»</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">ЗАКОН УКРАЇНИ «Про особливості доступу до інформації у сферах постачання електричної енергії, природного газу,теплопостачання, централізованого постачання гарячої води, централізованого питного водопостачання та водовідведення»</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">ПОСТАНОВА НКРЕКП від 14.03.2018 №307 «Про затвердження Правил ринку»</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">ПОСТАНОВА НКРЕКП від 14.03.2018 №308 «Про затвердження Правил ринку «на добу наперед» та внутрішньодобового ринку»</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">ПОСТАНОВА НКРЕКП від 14.03.2018 №309 «Про затвердження Кодексу системи передачі»</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">ПОСТАНОВА НКРЕКП від 14.03.2018 №310 «Про затвердження Кодексу систем розподілу»</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">ПОСТАНОВА НКРЕКП від 27.12.2017 № 1469 «Про затвердження Ліцензійних умов провадження господарської діяльності з постачання електричної енергії споживачу»</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">ПОСТАНОВА НКРЕКП від 14.03.2018 №311 «Про затвердження Кодексу комерційного обліку електричної енергії»</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">ПОСТАНОВА НКРЕКП від 14.03.2018 №312 «Про затвердження Правил роздрібного ринку електричної енергії»</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">ПОСТАНОВА НКРЕКП від 12.06.2018 №375 «Про затвердження Порядку забезпечення стандартів якості електропостачання та надання компенсацій споживачам за їх недотримання»</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">Порядок зміни електропостачальника за ініциативою споживача</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">Порядок зняття показів засобів вимірювання та оплати спожитої електричної енергії</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">Оприлюднена інформація щодо дотримання загальних та гарантованих стандартів якості електропостачання за 2019 р.</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">Оприлюднена інформація щодо дотримання загальних та гарантованих стандартів якості електропостачання за 2020 р.</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">Оприлюднена інформація щодо дотримання загальних та гарантованих стандартів якості електропостачання за 2021 р.</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">Складові вільної ціни електричної енергії з 01.01.2021 р.</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">Переваги ефективного кінцевого використання енергії споживачами та поради щодо підвищення енергоефективності при споживанні електроенергії</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">Джерела надходження електроенергії в 2020 році</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">Звіт щодо розгляду звернень|скарг|претензій споживачів КП «ВОДОКАНАЛ» у 2019 році</a></p>
               <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">Звіт щодо розгляду звернень|скарг|претензій споживачів КП «ВОДОКАНАЛ» у 2020 році</a></p>
               <p></p>
            </div>
         </div>
         <div class="popup__button close-popup">
            <a href="#" class="button-popup">ЗАЧИНИТИ</a>
         </div>
      </div>
   </div>
</div>

<div id="popup__Poslugi-Avto" class="popup">
   <div class="popup__body">
      <div class="popup__content">
         <a href="#header" class="popup__close close-popup">+</a>
         <div class="popup__title">Послуги автотранспорту</div>
         <div class="popup__text">
            <p class="bold">Служба автотранспорту</p>
            <p class="bold">Підрозділ КП «Водоканал» надає додаткові транспортні послуги з перевезення вантажів, з підвозу води, послуги каналопромивної машини, екскаваторів та іншого спеціалізованого транспорту.</p>
            <p>Надання послуг для юридичних осіб здійснюється на основі складання договору на надання послуг, для фізичних осіб після заповнення заяви.</p>
            <p>Для замовлення транспортних послуг замовнику потрібно звернутися до служби автотранспорту КП «Водоканал» за тел. (061)221-13-66</p>
         </div>
         <div class="popup__button close-popup">
            <a href="#" class="button-popup">ЗАЧИНИТИ</a>
         </div>
      </div>
   </div>
</div>

<div id="popup__TMC" class="popup">
   <div class="popup__body">
      <div class="popup__content">
         <a href="#header" class="popup__close close-popup">+</a>
         <div class="popup__title">Реалізація ТМЦ</div>
         <div class="popup__text">
            <p><a target="_blank" href="https://zeus.net.ua/wp-content/uploads/2019/07/zraz.jpeg">Ссылка на ПДФ файл как на действующем сайте</a></p>
            <p>Також прошу замінити номер телефону (061)271-12-09 (номер на действующес сайте, в данном разделе отсуствует. Как подписать строчку с номером?)</p>
         </div>
         <div class="popup__button close-popup">
            <a href="#" class="button-popup">ЗАЧИНИТИ</a>
         </div>
      </div>
   </div>
</div>

<!-- ***************************** Раздел "Новини" ************************************ -->
<div class="content__container">
   <div class="news">
      <div class="news__title">
         <h2 class="goto__novini">Новини</h2>
      </div>
      <div class="news__container">
         <!-- <img src="<?php bloginfo('template_url'); ?>/assets/images/reconstruktion.png" alt=""> -->
      </div>
   </div>
</div>

<?php get_footer(); ?>