<?php

/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * @category  PayIntelligent
 * @package   PayIntelligent_RatePAY_Rechnung
 * @copyright (C) 2011 PayIntelligent GmbH  <http://www.payintelligent.de/>
 * @license	http://www.gnu.org/licenses/  GNU General Public License 3
 */
// -------------------------------
// RESOURCE IDENTITFIER = STRING
// -------------------------------
$aLang = array(
    'charset'                                  => 'UTF-8',
    'SHOP_MODULE_GROUP_PI_RATEPAY_GENERAL'     => 'Allgemein',
    'SHOP_MODULE_GROUP_PI_RATEPAY_GERMANY'     => 'Deutschland',
    'SHOP_MODULE_GROUP_PI_RATEPAY_AUSTRIA'     => 'Österreich',
    'SHOP_MODULE_GROUP_PI_RATEPAY_SWITZERLAND' => 'Schweiz',
    'SHOP_MODULE_GROUP_PI_RATEPAY_NETHERLAND'  => 'Niederlande',
    'SHOP_MODULE_blRPLogging'                   => 'Vorgänge protokollieren',
    'SHOP_MODULE_blRPAutoPaymentConfirm'        => 'Auto Payment Confirm',
    'SHOP_MODULE_sRPDeviceFingerprintSnippetId' => 'Device Fingerprint Snippet-Id',
    'SHOP_MODULE_blRPInvoiceActive'             => 'Ratepay Rechnung aktiv',
    'SHOP_MODULE_blRPInvoiceSandbox'            => 'Sandbox (Testmodus)',
    'SHOP_MODULE_sRPInvoiceProfileId'           => 'Profil ID',
    'SHOP_MODULE_sRPInvoiceSecret'              => 'Security Code',
    'SHOP_MODULE_blRPInstallmentActive'         => 'Ratepay Ratenzahlung aktiv',
    'SHOP_MODULE_blRPInstallmentSandbox'        => 'Sandbox (Testmodus)',
    'SHOP_MODULE_sRPInstallmentProfileId'       => 'Profil ID',
    'SHOP_MODULE_sRPInstallmentSecret'          => 'Security Code',
    'SHOP_MODULE_sRPInstallmentSettlement'              => 'Begleichungsmethoden',
    'SHOP_MODULE_sRPInstallmentSettlement_debit'        => 'Nur Lastschrift',
    'SHOP_MODULE_sRPInstallmentSettlement_banktransfer' => 'Nur &Uuml;berweisung',
    'SHOP_MODULE_sRPInstallmentSettlement_both'         => 'Beides',
    'SHOP_MODULE_blRPInstallment0Active'         => 'Ratepay Ratenzahlung 0% aktiv',
    'SHOP_MODULE_blRPInstallment0Sandbox'        => 'Sandbox (Testmodus)',
    'SHOP_MODULE_sRPInstallment0ProfileId'       => 'Profil ID',
    'SHOP_MODULE_sRPInstallment0Secret'          => 'Security Code',
    'SHOP_MODULE_sRPInstallment0Settlement'              => 'Begleichungsmethoden',
    'SHOP_MODULE_sRPInstallment0Settlement_debit'        => 'Nur Lastschrift',
    'SHOP_MODULE_sRPInstallment0Settlement_banktransfer' => 'Nur &Uuml;berweisung',
    'SHOP_MODULE_sRPInstallment0Settlement_both'         => 'Beides',
    'SHOP_MODULE_blRPElvActive'                 => 'Ratepay SEPA-Lastschrift aktiv',
    'SHOP_MODULE_blRPElvSandbox'                => 'Sandbox (Testmodus)',
    'SHOP_MODULE_blRPElvIbanOnly'               => 'Nur IBAN erlauben',
    'SHOP_MODULE_sRPElvProfileId'               => 'Profil ID',
    'SHOP_MODULE_sRPElvSecret'                  => 'Security Code',
    'SHOP_MODULE_blRPAustriaInvoice'            => 'Ratepay Rechnung aktiv',
    'SHOP_MODULE_blRPAustriaInvoiceSandbox'     => 'Sandbox (Testmodus)',
    'SHOP_MODULE_sRPAustriaInvoiceProfileId'    => 'Profil ID',
    'SHOP_MODULE_sRPAustriaInvoiceSecret'       => 'Security Code',
    'SHOP_MODULE_blRPAustriaInstallment'        => 'Ratepay Ratenzahlung aktiv',
    'SHOP_MODULE_blRPAustriaInstallmentSandbox' => 'Sandbox (Testmodus)',
    'SHOP_MODULE_sRPAustriaInstallmentProfileId'=> 'Profil ID',
    'SHOP_MODULE_sRPAustriaInstallmentSecret'   => 'Security Code',
    'SHOP_MODULE_sRPAustriaInstallmentSettlement'              => 'Begleichungsmethoden',
    'SHOP_MODULE_sRPAustriaInstallmentSettlement_debit'        => 'Nur Lastschrift',
    'SHOP_MODULE_sRPAustriaInstallmentSettlement_banktransfer' => 'Nur &Uuml;berweisung',
    'SHOP_MODULE_sRPAustriaInstallmentSettlement_both'         => 'Beides',
    'SHOP_MODULE_blRPAustriaInstallment0'        => 'Ratepay Ratenzahlung 0% aktiv',
    'SHOP_MODULE_blRPAustriaInstallment0Sandbox' => 'Sandbox (Testmodus)',
    'SHOP_MODULE_sRPAustriaInstallment0ProfileId'=> 'Profil ID',
    'SHOP_MODULE_sRPAustriaInstallment0Secret'   => 'Security Code',
    'SHOP_MODULE_sRPAustriaInstallment0Settlement'              => 'Begleichungsmethoden',
    'SHOP_MODULE_sRPAustriaInstallment0Settlement_debit'        => 'Nur Lastschrift',
    'SHOP_MODULE_sRPAustriaInstallment0Settlement_banktransfer' => 'Nur &Uuml;berweisung',
    'SHOP_MODULE_sRPAustriaInstallment0Settlement_both'         => 'Beides',
    'SHOP_MODULE_blRPAustriaElv'                => 'Ratepay SEPA-Lastschrift aktiv',
    'SHOP_MODULE_blRPAustriaElvSandbox'         => 'Sandbox (Testmodus)',
    'SHOP_MODULE_sRPAustriaElvProfileId'        => 'Profil ID',
    'SHOP_MODULE_sRPAustriaElvSecret'           => 'Security Code',
    'SHOP_MODULE_blRPSwitzerlandInvoice'        => 'Ratepay Rechnung aktiv',
    'SHOP_MODULE_blRPSwitzerlandInvoiceSandbox' => 'Sandbox (Testmodus)',
    'SHOP_MODULE_sRPSwitzerlandInvoiceProfileId'=> 'Profil ID',
    'SHOP_MODULE_sRPSwitzerlandInvoiceSecret'   => 'Security Code',
    'SHOP_MODULE_blRPNetherlandInvoice'         => 'Ratepay Rechnung aktiv',
    'SHOP_MODULE_blRPNetherlandInvoiceSandbox'  => 'Sandbox (Testmodus)',
    'SHOP_MODULE_sRPNetherlandInvoiceProfileId' => 'Profil ID',
    'SHOP_MODULE_sRPNetherlandInvoiceSecret'    => 'Security Code',
    'SHOP_MODULE_blRPNetherlandElv'             => 'Ratepay SEPA-Lastschrift aktiv',
    'SHOP_MODULE_blRPNetherlandElvSandbox'      => 'Sandbox (Testmodus)',
    'SHOP_MODULE_sRPNetherlandElvProfileId'     => 'Profil ID',
    'SHOP_MODULE_sRPNetherlandElvSecret'        => 'Security Code',
    'PI_RATEPAY_CONFIGTEST_INVOICE'             => 'Verbindungstest für Ratepay Rechnung',
    'PI_RATEPAY_CONFIGTEST_INSTALLMENT'         => 'Verbindungstest für Ratepay Ratenzahlung',
    'PI_RATEPAY_CONFIGTEST_INSTALLMENT0'         => 'Verbindungstest für Ratepay Ratenzahlung 0%',
    'PI_RATEPAY_CONFIGTEST_ELV'                 => 'Verbindungstest für Ratepay SEPA-Lastschrift',
    'PI_RATEPAY_RATEPAY'                       => 'Ratepay',
    'PI_RATEPAY_RECHNUNG'                      => 'Ratepay Rechnung',
    'PI_RATEPAY_ELV'                           => 'Ratepay SEPA-Lastschrift',
    'PI_RATEPAY_RATE'                          => 'Ratepay Rate',
    'PI_RATEPAY_DETAILS'                       => 'Details',
    'PI_RATEPAY_WHITELABEL'                    => "Whitelabel",
    'PI_RATEPAY_LOGGING'                       => "Logging",
    'PI_RATEPAY_LOGGING_ENTRY'                 => "Logeintrag",
    'PI_RATEPAY_LOGGING_ID'                    => "ID",
    'PI_RATEPAY_LOGGING_ORDERNUMBER'           => "Bestellnummer",
    'PI_RATEPAY_LOGGING_TRANSACTIONID'         => "Transaktionsnummer",
    'PI_RATEPAY_LOGGING_PAYMENTMETHOD'         => "Bezahlmethode",
    'PI_RATEPAY_LOGGING_PAYMENTTYPE'           => "Operationtyp",
    'PI_RATEPAY_LOGGING_PAYMENTSUBTYPE'        => "Operationsuntertyp",
    'PI_RATEPAY_LOGGING_RESULT_CODE'           => "Ergebnis-Code",
    'PI_RATEPAY_LOGGING_REFERENCE'             => "Verwendungszweck",
    'PI_RATEPAY_LOGGING_FIRST_NAME'            => "Vorname",
    'PI_RATEPAY_LOGGING_LAST_NAME'             => "Nachname",
    'PI_RATEPAY_LOGGING_RESULT'                => "Ergebnis",
    'PI_RATEPAY_LOGGING_REQUEST'               => "Anfrage",
    'PI_RATEPAY_LOGGING_RESPONSE'              => "Antwort",
    'PI_RATEPAY_LOGGING_DATE'                  => "Datum",
    'PI_RATEPAY_LOGGING_DAYS'                  => "Tage",
    'PI_RATEPAY_LOGGING_DELETE'                => "L&ouml;schen",
    'PI_RATEPAY_LOGGING_DELETE_CONFIRM'        => "Sind Sie sicher, dass Sie alle Logeinträge löschen wollen, die älter als ",
    'PI_RATEPAY_LOGGING_DELETE_CONFIRM2'       => " Tage sind?",
    'PI_RATEPAY_LOGGING_TEXTDAYS'              => "L&ouml;schen Sie alle Eintr&auml;ge die &auml;lter sind als ",
    'PI_RATEPAY_LOGGING_SUCCESS'               => "L&ouml;schen war erfolgreich.",
    'PI_RATEPAY_LOGGING_REASON'                => "Reason",
    'PI_RATEPAY_LOGGING_REASON_CODE'           => "Reason-Code",
    'PI_RATEPAY_LOGGING_STATUS'                => "Status",
    'PI_RATEPAY_LOGGING_STATUS_CODE'           => "Status-Code",
    'PI_RATEPAY_CONNECTED'                     => 'Verbunden',
    'PI_RATEPAY_DISCONNECTED'                  => 'Nicht verbunden',
    'PI_RATEPAY_UNAVAILABLE'                   => 'Nicht verfügbar',
    'PI_RATEPAY_NODETAILS'                     => 'Keine Ratepay Bezahlung.',
    'PI_RATEPAY_ARTICLENR'                     => "Art.-Nr.",
    'PI_RATEPAY_ARTICLENAME'                   => "Bezeichnung",
    'PI_RATEPAY_UNITPRICE'                     => "Einzelpreis (Netto)",
    'PI_RATEPAY_TOTALPRICE'                    => "Gesamtpreis (Brutto)",
    'PI_RATEPAY_ORDERED'                       => "Bestellt",
    'PI_RATEPAY_SHIPPED'                       => "Geliefert",
    'PI_RATEPAY_CANCELLED'                     => "Storniert",
    'PI_RATEPAY_RETURNED'                      => "Retourniert",
    'PI_RATEPAY_TAX'                           => "MwSt.",
    'PI_RATEPAY_QUANTITY'                      => "Anzahl",
    'PI_RATEPAY_SHIPPING'                      => "versenden",
    'PI_RATEPAY_CANCELLING'                    => "stornieren",
    'PI_RATEPAY_KOMMA'                         => ",",
    'PI_RATEPAY_RETURNING'                     => "retournieren",
    'PI_RATEPAY_RETURNING_TABLE_HEAD'          => "Retoure",
    'PI_RATEPAY_VOUCHER'                       => "Gutschrift erzeugen",
    'PI_RATEPAY_VALUE'                         => "Wert",
    'PI_RATEPAY_HISTORY'                       => "Historie",
    'PI_RATEPAY_CONFIRMDELIVER'                => "Lieferung",
    'PI_RATEPAY_SHIPPING_TABLE_HEAD'           => "Lieferung/Stornierung",
    'PI_RATEPAY_GOODWILL'                      => "Gutschrift",
    'PI_RATEPAY_RETURN'                        => "Retournierung",
    'PI_RATEPAY_CANCELLATION'                  => "Stornierung",
    'PI_RATEPAY_PARTIALRETURN'                 => "Teilretournierung",
    'PI_RATEPAY_FULLRETURN'                    => "Komplettretournierung",
    'PI_RATEPAY_PARTIALCANCELLATION'           => "Teilstornierung",
    'PI_RATEPAY_FULLCANCELLATION'              => "Komplettstornierung",
    'PI_RATEPAY_ACTION'                        => "Aktion",
    'PI_RATEPAY_DATE'                          => "Datum",
    'PI_RATEPAY_SUCCESSPARTIALCANCELLATION'    => "Teilstornierung war erfolgreich.",
    'PI_RATEPAY_SUCCESSFULLCANCELLATION'       => "Vollstornierung war erfolgreich.",
    'PI_RATEPAY_SUCCESSPARTIALRETURN'          => "Teilretournierung war erfolgreich.",
    'PI_RATEPAY_SUCCESSFULLRETURN'             => "Vollretournierung war erfolgreich.",
    'PI_RATEPAY_SUCCESSDELIVERY'               => "Auslieferung war erfolgreich.",
    'PI_RATEPAY_SUCCESSVOUCHER'                => "Gutschrift wurde erfolgreich ausgef&uuml;hrt",
    'PI_RATEPAY_ERRORPARTIALCANCELLATION'      => "Teilstornierung war nicht erfolgreich.",
    'PI_RATEPAY_ERRORFULLCANCELLATION'         => "Vollstornierung war nicht erfolgreich.",
    'PI_RATEPAY_ERRORPARTIALRETURN'            => "Teilretournierung war nicht erfolgreich.",
    'PI_RATEPAY_ERRORFULLRETURN'               => "Vollretournierung war nicht erfolgreich.",
    'PI_RATEPAY_ERRORDELIVERY'                 => "Auslieferung war nicht erfolgreich.",
    'PI_RATEPAY_ERRORVOUCHER'                  => "Gutschrift wurde nicht erfolgreich ausgef&uuml;hrt",
    'PI_RATEPAY_ERRORTYPING'                   => "Falsche Eingabe. Eingabe wurde zur&uuml;ckgesetzt. Sie d&uuml;rfen nur Zahlen eintragen, die den vorausgef&uuml;llten Wert nicht &uuml;berschreiten.",
    'PI_RATEPAY_ADMIN_MENU_CONFIGURATION'      => "Ratenkonfiguration",
    'PI_RATEPAY_ADMIN_MENU_PROFILES'           => "Profile",
    'PI_RATEPAY_PROFILE_DETAILS'               => "Profildetails",
    'PI_RATEPAY_RECHNUNG_SETTINGS_DUEDATE'     => "F&auml;llig nach",
    'PI_RATEPAY_RECHNUNG_SETTINGS_DUEDATE_DAY' => "Tagen",
    'PI_RATEPAY_RATE_PAYMENTFIRSTDAY'          => "Abweichende F&auml;lligkeit f&uuml;r Kunden aktivieren",
    'PI_RATEPAY_ELV_SETTINGS'                  => "Lastschrift Einstellungen",
    'PI_RATEPAY_ELV_SETTINGS_TITLE'            => "Ratepay SEPA-Lastschrift Einstellungen",
    'PI_RATEPAY_SAVEBANKDATA'                  => "Bankdaten speichern (verschl&uuml;sselt)",
    'PI_RATEPAY_ACTIVATE_ELV'                  => "Lastschrift f&uuml;r Rate aktivieren",
    'PI_RATEPAY_CONFIGSAVESUCCESS'             => "Die Konfiguration wurde erfolgreich aktualisiert.",
);
