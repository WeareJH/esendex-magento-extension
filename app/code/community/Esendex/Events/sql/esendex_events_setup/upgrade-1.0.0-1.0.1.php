<?php
/**
 * Copyright (C) 2015 Esendex Ltd.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the Esendex Community License v1.0 as published by
 * the Esendex Ltd.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * Esendex Community Licence v1.0 for more details.
 *
 * You should have received a copy of the Esendex Community Licence v1.0
 * along with this program.  If not, see <http://www.esendex.com/esendexcommunitylicence/>
 */

/** @var $this Esendex_Sms_Model_Resource_Setup */
$this->startSetup();

$this->addSampleMessage(
    'Order Status Changed - Canceled',
    'de_DE',
    'Hallo $FIRSTNAME$! Ihre $STORENAME$ Bestellung wurde storniert. Wenn Sie Ihre Bestellung abschließen möchten, wählen Sie folgende Nummer $STORECONTACTTELEPHONE$ oder besuchen Sie $ORDERURL$.'
);

$this->endSetup();
