<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>
<div class="modalContainer modalAmount">
    <div class="modalDialog">
        <div class="modalContent">
            <h2 class="modalHeading">
                Уточнить стоимость
            </h2>

            <p class="modalExplan">
                Оставьте свои контактные данные и мы свяжемся с вами в ближайшее время. Для консультации по любому вашему вопросу
            </p>
            <button class="btnCloseModal">
                <img src="<?=DEFAULT_TEMPLATE_PATH_IMG?>/images/icons/cross.svg" />
            </button>
            
            <form   class="formModal formAmount"
                    action=""
            >
                <?=bitrix_sessid_post()?>
                <ul class="listFieldsForm">
                    <li class="itemField fieldAmount">
                        <label class="labelPhone" for="phone">
                            Номер телефона
                            <sup>*</sup>
                        </label>
                        <input  class="inputPhone"
                                name="phone"
                                id="phone"
                                type="text"
                                placeholder="+7 (000) 000–00–00"
                                required
                        />
                    </li>
                    <li class="itemField fieldAmount">
                        <label class="labelMessage" for="message">
                            Ваше сообщение
                        </label>
                        <textarea   class="areaMessage" 
                                    name="message"
                                    id="message"
                                    placeholder="Сообщение"
                        >

                        </textarea>
                    </li>
                    
                    <li class="itemField itemConfirm">
                        <input  class="checkConfirm visuallyHidden"
                                id="confirm"
                                type="checkbox"
                        />
                        <label  class="labelConfirm"
                                for="confirm"
                        >
                        </label>
                        <p class="textConfirm">
                            Нажимая кнопку "Отправить"  я даю свое согласие на обработку персональных данных и ознакомлен с политикой конфиденциальности
                        </p>
                    </li>
                </ul>

                <button class="btnBasic btnFormModal btnSubmitAmount">
                    Отправить
                </button>
            </form>
        </div>
    </div>
</div>