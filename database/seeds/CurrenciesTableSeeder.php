<?php

use Illuminate\Database\Seeder;
use App\Model\Currency;
use Carbon\Carbon;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
    	$insert_arr = array();
    	$insert_arr = [
    		
                [
                    'name'=>'Leke',
                     'code'=>'ALL',
                     'symbol'=>'Lek',
                     'status' => 2
                ],
                [
                    'name'=>'Dollars',
                     'code'=>'USD',
                     'symbol'=>'$',
                     'status' => 2
                ],
                [
                    'name'=>'Afghanis',
                     'code'=>'AFN',
                     'symbol'=>'؋',
                     'status' => 2
                ],
                [
                    'name'=>'Pesos',
                     'code'=>'ARS',
                     'symbol'=>'$',
                     'status' => 2
                ],
                [
                    'name'=>'Guilders',
                     'code'=>'AWG',
                     'symbol'=>'ƒ',
                     'status' => 2
                ],
                [
                    'name'=>'Dollars',
                     'code'=>'AUD',
                     'symbol'=>'$',
                     'status' => 2
                ],
                [
                    'name'=>'New Manats',
                     'code'=>'AZN',
                     'symbol'=>'ман',
                     'status' => 2
                ],
                [
                    'name'=>'Dollars',
                     'code'=>'BSD',
                     'symbol'=>'$',
                     'status' => 2
                ],
                [
                    'name'=>'Dollars',
                     'code'=>'BBD',
                     'symbol'=>'$',
                     'status' => 2
                ],
                [
                    'name'=>'Rubles',
                     'code'=>'BYR',
                     'symbol'=>'p.',
                     'status' => 2
                ],
                [
                    'name'=>'Euro',
                     'code'=>'EUR',
                     'symbol'=>'€',
                     'status' => 2
                ],
                [
                    'name'=>'Dollars',
                     'code'=>'BZD',
                     'symbol'=>'BZ$',
                     'status' => 2
                ],
                [
                    'name'=>'Dollars',
                     'code'=>'BMD',
                     'symbol'=>'$',
                     'status' => 2
                ],
                [
                    'name'=>'Bolivianos',
                     'code'=>'BOB',
                     'symbol'=>'$b',
                     'status' => 2
                ],
                [
                    'name'=>'Convertible Marka',
                     'code'=>'BAM',
                     'symbol'=>'KM',
                     'status' => 2
                ],
                [
                    'name'=>'Pula',
                     'code'=>'BWP',
                     'symbol'=>'P',
                     'status' => 2
                ],
                [
                    'name'=>'Leva',
                     'code'=>'BGN',
                     'symbol'=>'лв',
                     'status' => 2
                ],
                [
                    'name'=>'Reais',
                     'code'=>'BRL',
                     'symbol'=>'R$',
                     'status' => 2
                ],
                [
                    'name'=>'Pounds',
                     'code'=>'GBP',
                     'symbol'=>'£',
                     'status' => 2
                ],
                [
                    'name'=>'Dollars',
                     'code'=>'BND',
                     'symbol'=>'$',
                     'status' => 2
                ],
                [
                    'name'=>'Riels',
                     'code'=>'KHR',
                     'symbol'=>'៛',
                     'status' => 2
                ],
                [
                    'name'=>'Dollars',
                     'code'=>'CAD',
                     'symbol'=>'$',
                     'status' => 2
                ],
                [
                    'name'=>'Dollars',
                     'code'=>'KYD',
                     'symbol'=>'$',
                     'status' => 2
                ],
                [
                    'name'=>'Pesos',
                     'code'=>'CLP',
                     'symbol'=>'$',
                     'status' => 2
                ],
                [
                    'name'=>'Yuan Renminbi',
                     'code'=>'CNY',
                     'symbol'=>'¥',
                     'status' => 2
                ],
                [
                    'name'=>'Pesos',
                     'code'=>'COP',
                     'symbol'=>'$',
                     'status' => 2
                ],
                [
                    'name'=>'Colón',
                     'code'=>'CRC',
                     'symbol'=>'₡',
                     'status' => 2
                ],
                [
                    'name'=>'Kuna',
                     'code'=>'HRK',
                     'symbol'=>'kn',
                     'status' => 2
                ],
                [
                    'name'=>'Pesos',
                     'code'=>'CUP',
                     'symbol'=>'₱',
                     'status' => 2
                ],
                [
                    'name'=>'Koruny',
                     'code'=>'CZK',
                     'symbol'=>'Kč',
                     'status' => 2
                ],
                [
                    'name'=>'Kroner',
                     'code'=>'DKK',
                     'symbol'=>'kr',
                     'status' => 2
                ],
                [
                    'name'=>'Pesos',
                     'code'=>'DOP ',
                     'symbol'=>'RD$',
                     'status' => 2
                ],
                [
                    'name'=>'Dollars',
                     'code'=>'XCD',
                     'symbol'=>'$',
                     'status' => 2
                ],
                [
                    'name'=>'Pounds',
                     'code'=>'EGP',
                     'symbol'=>'£',
                     'status' => 2
                ],
                [
                    'name'=>'Colones',
                     'code'=>'SVC',
                     'symbol'=>'$',
                     'status' => 2
                ],
                [
                    'name'=>'Pounds',
                     'code'=>'FKP',
                     'symbol'=>'£',
                     'status' => 2
                ],
                [
                    'name'=>'Dollars',
                     'code'=>'FJD',
                     'symbol'=>'$',
                     'status' => 2
                ],
                [
                    'name'=>'Cedis',
                     'code'=>'GHC',
                     'symbol'=>'¢',
                     'status' => 2
                ],
                [
                    'name'=>'Pounds',
                     'code'=>'GIP',
                     'symbol'=>'£',
                     'status' => 2
                ],
                [
                    'name'=>'Quetzales',
                     'code'=>'GTQ',
                     'symbol'=>'Q',
                     'status' => 2
                ],
                [
                    'name'=>'Pounds',
                     'code'=>'GGP',
                     'symbol'=>'£',
                     'status' => 2
                ],
                [
                    'name'=>'Dollars',
                     'code'=>'GYD',
                     'symbol'=>'$',
                     'status' => 2
                ],
                [
                    'name'=>'Lempiras',
                     'code'=>'HNL',
                     'symbol'=>'L',
                     'status' => 2
                ],
                [
                    'name'=>'Dollars',
                     'code'=>'HKD',
                     'symbol'=>'$',
                     'status' => 2
                ],
                [
                    'name'=>'Forint',
                     'code'=>'HUF',
                     'symbol'=>'Ft',
                     'status' => 2
                ],
                [
                    'name'=>'Kronur',
                     'code'=>'ISK',
                     'symbol'=>'kr',
                     'status' => 2
                ],
                [
                    'name'=>'Rupees',
                     'code'=>'INR',
                     'symbol'=>'Rp',
                     'status' => 1
                ],
                [
                    'name'=>'Rupiahs',
                     'code'=>'IDR',
                     'symbol'=>'Rp',
                     'status' => 2
                ],
                [
                    'name'=>'Rials',
                     'code'=>'IRR',
                     'symbol'=>'﷼',
                     'status' => 2
                ],
                [
                    'name'=>'Pounds',
                     'code'=>'IMP',
                     'symbol'=>'£',
                     'status' => 2
                ],
                [
                    'name'=>'New Shekels',
                     'code'=>'ILS',
                     'symbol'=>'₪',
                     'status' => 2
                ],
                [
                    'name'=>'Dollars',
                     'code'=>'JMD',
                     'symbol'=>'J$',
                     'status' => 2
                ],
                [
                    'name'=>'Yen',
                     'code'=>'JPY',
                     'symbol'=>'¥',
                     'status' => 2
                ],
                [
                    'name'=>'Pounds',
                     'code'=>'JEP',
                     'symbol'=>'£',
                     'status' => 2
                ],
                [
                    'name'=>'Tenge',
                     'code'=>'KZT',
                     'symbol'=>'лв',
                     'status' => 2
                ],
                [
                    'name'=>'Won',
                     'code'=>'KPW',
                     'symbol'=>'₩',
                     'status' => 2
                ],
                [
                    'name'=>'Won',
                     'code'=>'KRW',
                     'symbol'=>'₩',
                     'status' => 2
                ],
                [
                    'name'=>'Soms',
                     'code'=>'KGS',
                     'symbol'=>'лв',
                     'status' => 2
                ],
                [
                    'name'=>'Kips',
                     'code'=>'LAK',
                     'symbol'=>'₭',
                     'status' => 2
                ],
                [
                    'name'=>'Lati',
                     'code'=>'LVL',
                     'symbol'=>'Ls',
                     'status' => 2
                ],
                [
                    'name'=>'Pounds',
                     'code'=>'LBP',
                     'symbol'=>'£',
                     'status' => 2
                ],
                [
                    'name'=>'Dollars',
                     'code'=>'LRD',
                     'symbol'=>'$',
                     'status' => 2
                ],
                [
                    'name'=>'Switzerland Francs',
                     'code'=>'CHF',
                     'symbol'=>'CHF',
                     'status' => 2
                ],
                [
                    'name'=>'Litai',
                     'code'=>'LTL',
                     'symbol'=>'Lt',
                     'status' => 2
                ],
                [
                    'name'=>'Denars',
                     'code'=>'MKD',
                     'symbol'=>'ден',
                     'status' => 2
                ],
                [
                    'name'=>'Ringgits',
                     'code'=>'MYR',
                     'symbol'=>'RM',
                     'status' => 2
                ],
                [
                    'name'=>'Rupees',
                     'code'=>'MUR',
                     'symbol'=>'₨',
                     'status' => 2
                ],
                [
                    'name'=>'Pesos',
                     'code'=>'MXN',
                     'symbol'=>'$',
                     'status' => 2
                ],
                [
                    'name'=>'Tugriks',
                     'code'=>'MNT',
                     'symbol'=>'₮',
                     'status' => 2
                ],
                [
                    'name'=>'Meticais',
                     'code'=>'MZN',
                     'symbol'=>'MT',
                     'status' => 2
                ],
                [
                    'name'=>'Dollars',
                     'code'=>'NAD',
                     'symbol'=>'$',
                     'status' => 2
                ],
                [
                    'name'=>'Rupees',
                     'code'=>'NPR',
                     'symbol'=>'₨',
                     'status' => 2
                ],
                [
                    'name'=>'Guilders',
                     'code'=>'ANG',
                     'symbol'=>'ƒ',
                     'status' => 2
                ],
                [
                    'name'=>'Dollars',
                     'code'=>'NZD',
                     'symbol'=>'$',
                     'status' => 2
                ],
                [
                    'name'=>'Cordobas',
                     'code'=>'NIO',
                     'symbol'=>'C$',
                     'status' => 2
                ],
                [
                    'name'=>'Nairas',
                     'code'=>'NGN',
                     'symbol'=>'₦',
                     'status' => 2
                ],
                [
                    'name'=>'Krone',
                     'code'=>'NOK',
                     'symbol'=>'kr',
                     'status' => 2
                ],
                [
                    'name'=>'Rials',
                     'code'=>'OMR',
                     'symbol'=>'﷼',
                     'status' => 2
                ],
                [
                    'name'=>'Rupees',
                     'code'=>'PKR',
                     'symbol'=>'₨',
                     'status' => 2
                ],
                [
                    'name'=>'Balboa',
                     'code'=>'PAB',
                     'symbol'=>'B/.',
                     'status' => 2
                ],
                [
                    'name'=>'Guarani',
                     'code'=>'PYG',
                     'symbol'=>'Gs',
                     'status' => 2
                ],
                [
                    'name'=>'Nuevos Soles',
                     'code'=>'PEN',
                     'symbol'=>'S/.',
                     'status' => 2
                ],
                [
                    'name'=>'Pesos',
                     'code'=>'PHP',
                     'symbol'=>'Php',
                     'status' => 2
                ],
                [
                    'name'=>'Zlotych',
                     'code'=>'PLN',
                     'symbol'=>'zł',
                     'status' => 2
                ],
                [
                    'name'=>'Rials',
                     'code'=>'QAR',
                     'symbol'=>'﷼',
                     'status' => 2
                ],
                [
                    'name'=>'New Lei',
                     'code'=>'RON',
                     'symbol'=>'lei',
                     'status' => 2
                ],
                [
                    'name'=>'Rubles',
                     'code'=>'RUB',
                     'symbol'=>'руб',
                     'status' => 2
                ],
                [
                    'name'=>'Pounds',
                     'code'=>'SHP',
                     'symbol'=>'£',
                     'status' => 2
                ],
                [
                    'name'=>'Riyals',
                     'code'=>'SAR',
                     'symbol'=>'﷼',
                     'status' => 2
                ],
                [
                    'name'=>'Dinars',
                     'code'=>'RSD',
                     'symbol'=>'Дин.',
                     'status' => 2
                ],
                [
                    'name'=>'Rupees',
                     'code'=>'SCR',
                     'symbol'=>'₨',
                     'status' => 2
                ],
                [
                    'name'=>'Dollars',
                     'code'=>'SGD',
                     'symbol'=>'$',
                     'status' => 2
                ],
                [
                    'name'=>'Dollars',
                     'code'=>'SBD',
                     'symbol'=>'$',
                     'status' => 2
                ],
                [
                    'name'=>'Shillings',
                     'code'=>'SOS',
                     'symbol'=>'S',
                     'status' => 2
                ],
                [
                    'name'=>'Rand',
                     'code'=>'ZAR',
                     'symbol'=>'R',
                     'status' => 2
                ],
                [
                    'name'=>'Rupees',
                     'code'=>'LKR',
                     'symbol'=>'₨',
                     'status' => 2
                ],
                [
                    'name'=>'Kronor',
                     'code'=>'SEK',
                     'symbol'=>'kr',
                     'status' => 2
                ],
                [
                    'name'=>'Dollars',
                     'code'=>'SRD',
                     'symbol'=>'$',
                     'status' => 2
                ],
                [
                    'name'=>'Pounds',
                     'code'=>'SYP',
                     'symbol'=>'£',
                     'status' => 2
                ],
                [
                    'name'=>'New Dollars',
                     'code'=>'TWD',
                     'symbol'=>'NT$',
                     'status' => 2
                ],
                [
                    'name'=>'Baht',
                     'code'=>'THB',
                     'symbol'=>'฿',
                     'status' => 2
                ],
                [
                    'name'=>'Dollars',
                     'code'=>'TTD',
                     'symbol'=>'TT$',
                     'status' => 2
                ],
                [
                    'name'=>'Lira',
                     'code'=>'TRY',
                     'symbol'=>'TL',
                     'status' => 2
                ],
                [
                    'name'=>'Liras',
                     'code'=>'TRL',
                     'symbol'=>'£',
                     'status' => 2
                ],
                [
                    'name'=>'Dollars',
                     'code'=>'TVD',
                     'symbol'=>'$',
                     'status' => 2
                ],
                [
                    'name'=>'Hryvnia',
                     'code'=>'UAH',
                     'symbol'=>'₴',
                     'status' => 2
                ],
                [
                    'name'=>'Pesos',
                     'code'=>'UYU',
                     'symbol'=>'$U',
                     'status' => 2
                ],
                [
                    'name'=>'Sums',
                     'code'=>'UZS',
                     'symbol'=>'лв',
                     'status' => 2
                ],
                [
                    'name'=>'Bolivares Fuertes',
                     'code'=>'VEF',
                     'symbol'=>'Bs',
                     'status' => 2
                ],
                [
                    'name'=>'Dong',
                     'code'=>'VND',
                     'symbol'=>'₫',
                     'status' => 2
                ],
                [
                    'name'=>'Rials',
                     'code'=>'YER',
                     'symbol'=>'﷼',
                     'status' => 2
                ],
                [
                    'name'=>'Zimbabwe Dollars',
                     'code'=>'ZWD',
                     'symbol'=>'Z$',
                     'status' => 2
                ],
    	];

    	
        Currency::insert($insert_arr);
    }
}