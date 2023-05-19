<?php
namespace Database\Seeders;
use App\Municipality;
use Illuminate\Database\Seeder;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $muncipalities = [
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'ताप्लेजुङ',
                'municipality' => 'सिडिङबा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'ताप्लेजुङ',
                'municipality' => 'मेरिङडेन गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'ताप्लेजुङ',
                'municipality' => 'माइवाखोला गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'ताप्लेजुङ',
                'municipality' => 'फाक्ताङलुङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'ताप्लेजुङ',
                'municipality' => 'सिरिजाङ्घा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'ताप्लेजुङ',
                'municipality' => 'मिक्वाखोला गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'ताप्लेजुङ',
                'municipality' => 'आठराई त्रिवेणी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'ताप्लेजुङ',
                'municipality' => 'पाथिवरा यांगवारक गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'ताप्लेजुङ',
                'municipality' => 'फुङलिङ नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'संखुवासभा',
                'municipality' => 'मकालु गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'संखुवासभा',
                'municipality' => 'चिचिला गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'संखुवासभा',
                'municipality' => 'सिलिचङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'संखुवासभा',
                'municipality' => 'भोटखोला गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'संखुवासभा',
                'municipality' => 'सभापोखरी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'संखुवासभा',
                'municipality' => 'धर्मदेवी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'संखुवासभा',
                'municipality' => 'माडी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'संखुवासभा',
                'municipality' => 'पञ्चखापन नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'संखुवासभा',
                'municipality' => 'चैनपुर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'संखुवासभा',
                'municipality' => 'खाँदबारी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'सोलुखुम्बु',
                'municipality' => 'सोटाङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'सोलुखुम्बु',
                'municipality' => 'महाकुलुङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'सोलुखुम्बु',
                'municipality' => 'लिखुपिके गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'सोलुखुम्बु',
                'municipality' => 'नेचासल्यान गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'सोलुखुम्बु',
                'municipality' => 'थुलुङ दुधकोशी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'सोलुखुम्बु',
                'municipality' => 'माप्या दुधकोशी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'सोलुखुम्बु',
                'municipality' => 'खुम्बुपसङ्लाहमु गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'सोलुखुम्बु',
                'municipality' => 'सोलुदुधाकुण्ड नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'ओखलढुङ्गा',
                'municipality' => 'लिखु गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'ओखलढुङ्गा',
                'municipality' => 'मोलुङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'ओखलढुङ्गा',
                'municipality' => 'सुनकोशी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'ओखलढुङ्गा',
                'municipality' => 'चम्पादेवी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'ओखलढुङ्गा',
                'municipality' => 'चिसंखुगढी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'ओखलढुङ्गा',
                'municipality' => 'खिजिदेम्बा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'ओखलढुङ्गा',
                'municipality' => 'मानेभञ्ज्याङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'ओखलढुङ्गा',
                'municipality' => 'सिद्धिचरण नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'खोटाङ',
                'municipality' => 'साकेला गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'खोटाङ',
                'municipality' => 'खोटेहाङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'खोटाङ',
                'municipality' => 'बराहापोखरी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'खोटाङ',
                'municipality' => 'ऐन्सेलुखर्क गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'खोटाङ',
                'municipality' => 'रवा बेसी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'खोटाङ',
                'municipality' => 'केपिलासगढी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'खोटाङ',
                'municipality' => 'जानतेढुङ्गा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'खोटाङ',
                'municipality' => 'दिप्रुङ चुचुम्मा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'खोटाङ',
                'municipality' => 'हलेसी तुवाचुङ नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'खोटाङ',
                'municipality' => 'दिक्तेल रुपाकोट मझुवागढी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'भोजपुर',
                'municipality' => 'अरुण गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'भोजपुर',
                'municipality' => 'आमचोक गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'भोजपुर',
                'municipality' => 'हतुवागढी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'भोजपुर',
                'municipality' => 'पौवाडुङ्मा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'भोजपुर',
                'municipality' => 'टेम्केमाइयुङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'भोजपुर',
                'municipality' => 'साल्पसिलिछो गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'भोजपुर',
                'municipality' => 'रामप्रसाद राई गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'भोजपुर',
                'municipality' => 'षडानन्द नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'भोजपुर',
                'municipality' => 'भोजपुर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'धनकुटा',
                'municipality' => 'चौबिसे गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'धनकुटा',
                'municipality' => 'शहिदभूमि गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'धनकुटा',
                'municipality' => 'साँगुरीगढी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'धनकुटा',
                'municipality' => 'छथर जोरपाटी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'धनकुटा',
                'municipality' => 'पाखरीबास नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'धनकुटा',
                'municipality' => 'महालक्ष्मी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'धनकुटा',
                'municipality' => 'धनकुटा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'तेह्रथुम',
                'municipality' => 'छथर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'तेह्रथुम',
                'municipality' => 'फेडाप गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'तेह्रथुम',
                'municipality' => 'आठराई गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'तेह्रथुम',
                'municipality' => 'मेन्चायम गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'तेह्रथुम',
                'municipality' => 'लालीगुराँस नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'तेह्रथुम',
                'municipality' => 'म्याङलुङ नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'पाँचथर',
                'municipality' => 'याङ्गवारक गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'पाँचथर',
                'municipality' => 'हिलिहाङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'पाँचथर',
                'municipality' => 'फालेलुङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'पाँचथर',
                'municipality' => 'तुम्बेवा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'पाँचथर',
                'municipality' => 'कुमायक गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'पाँचथर',
                'municipality' => 'मिक्लाजुङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'पाँचथर',
                'municipality' => 'फाल्गुनन्द गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'पाँचथर',
                'municipality' => 'फिदिम नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'इलाम',
                'municipality' => 'रोङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'इलाम',
                'municipality' => 'मङ्गेबुङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'इलाम',
                'municipality' => 'चुलाचुली गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'इलाम',
                'municipality' => 'सन्दकपुर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'इलाम',
                'municipality' => 'फाकफोकथुम गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'इलाम',
                'municipality' => 'माइजोगमाई गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'इलाम',
                'municipality' => 'इलाम नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'इलाम',
                'municipality' => 'माई नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'इलाम',
                'municipality' => 'देउमाई नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'इलाम',
                'municipality' => 'सूर्योदय नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'झापा',
                'municipality' => 'कमल गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'झापा',
                'municipality' => 'झापा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'झापा',
                'municipality' => 'कचनकवल गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'झापा',
                'municipality' => 'गौरीगञ्ज गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'झापा',
                'municipality' => 'बाह्रदशी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'झापा',
                'municipality' => 'हल्दिबारी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'झापा',
                'municipality' => 'बुद्धशान्ति गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'झापा',
                'municipality' => 'शिवसताक्सी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'झापा',
                'municipality' => 'भद्रपुर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'झापा',
                'municipality' => 'कनकाई नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'झापा',
                'municipality' => 'बिर्तामोड नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'झापा',
                'municipality' => 'मेचीनगर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'झापा',
                'municipality' => 'दमक नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'झापा',
                'municipality' => 'अर्जुनधारा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'झापा',
                'municipality' => 'गौराधा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'मोरङ',
                'municipality' => 'जहादा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'मोरङ',
                'municipality' => 'कटहरी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'मोरङ',
                'municipality' => 'ग्रामथान गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'मोरङ',
                'municipality' => 'धनपालथान गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'मोरङ',
                'municipality' => 'केराबारी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'मोरङ',
                'municipality' => 'बुढीगंगा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'मोरङ',
                'municipality' => 'कानेपोखरी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'मोरङ',
                'municipality' => 'मिक्लाजुङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'मोरङ',
                'municipality' => 'लेटाङ नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'मोरङ',
                'municipality' => 'सुनवर्शी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'मोरङ',
                'municipality' => 'रंगेली नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'मोरङ',
                'municipality' => 'पत्रहर्षनिश्चरे नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'मोरङ',
                'municipality' => 'विराटनगर महानगरपालिका',
                'type' => 'महानगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'मोरङ',
                'municipality' => 'उरालाबारी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'मोरङ',
                'municipality' => 'बेलबारी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'मोरङ',
                'municipality' => 'सुन्दरहरैचा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'मोरङ',
                'municipality' => 'रतुवामाई नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'सुनसरी',
                'municipality' => 'गढी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'सुनसरी',
                'municipality' => 'कोशी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'सुनसरी',
                'municipality' => 'बर्जु गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'सुनसरी',
                'municipality' => 'हरिनगर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'सुनसरी',
                'municipality' => 'देवानगन्ज गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'सुनसरी',
                'municipality' => 'भोक्राहा नरसिङ्ग गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'सुनसरी',
                'municipality' => 'रामधुनी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'सुनसरी',
                'municipality' => 'बराहक्षेत्र नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'सुनसरी',
                'municipality' => 'दुहबी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'सुनसरी',
                'municipality' => 'इनरुवा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'सुनसरी',
                'municipality' => 'धरान उप-महानगरपालिका',
                'type' => 'उप-महानगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'सुनसरी',
                'municipality' => 'इटहरी उप-महानगरपालिका',
                'type' => 'उप-महानगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'उदयपुर',
                'municipality' => 'तापली गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'उदयपुर',
                'municipality' => 'रौतामाई गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'उदयपुर',
                'municipality' => 'उदयपुरगढी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'उदयपुर',
                'municipality' => 'Limchungbung गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'उदयपुर',
                'municipality' => 'चौदण्डीगढी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'उदयपुर',
                'municipality' => 'Triyuga नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'उदयपुर',
                'municipality' => 'कटारी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कोशी प्रदेश',
                'district' => 'उदयपुर',
                'municipality' => 'बेलका नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सप्तरी',
                'municipality' => 'राजगढ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सप्तरी',
                'municipality' => 'रुपानी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सप्तरी',
                'municipality' => 'तिराहुत गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सप्तरी',
                'municipality' => 'महादेव गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सप्तरी',
                'municipality' => 'विष्णुपुर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सप्तरी',
                'municipality' => 'छिन्नमस्ता गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सप्तरी',
                'municipality' => 'बालन बिहुल गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सप्तरी',
                'municipality' => 'तिलाठी कोइलाडी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सप्तरी',
                'municipality' => 'अग्निशैर कृष्ण सावरण गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सप्तरी',
                'municipality' => 'हनुमाननगर कंकालिनी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सप्तरी',
                'municipality' => 'कञ्चनरुप नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सप्तरी',
                'municipality' => 'Rajbiraj नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सप्तरी',
                'municipality' => 'खडक नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सप्तरी',
                'municipality' => 'डाक्नेश्वरी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सप्तरी',
                'municipality' => 'सप्तकोशी गाउँपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सप्तरी',
                'municipality' => 'सुरुङ्गा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सप्तरी',
                'municipality' => 'शम्भुनाथ नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सप्तरी',
                'municipality' => 'बोडे बार्सैन नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सिरहा',
                'municipality' => 'औरही गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सिरहा',
                'municipality' => 'नरहा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सिरहा',
                'municipality' => 'अर्नामा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सिरहा',
                'municipality' => 'भगवानपुर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सिरहा',
                'municipality' => 'नवराजपुर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सिरहा',
                'municipality' => 'विष्णुपुर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सिरहा',
                'municipality' => 'बरियारपट्टी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सिरहा',
                'municipality' => 'लक्ष्मीपुर पटारी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सिरहा',
                'municipality' => 'सखुवानङ्करकट्टी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सिरहा',
                'municipality' => 'मिर्चैया नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सिरहा',
                'municipality' => 'लहान नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सिरहा',
                'municipality' => 'सिरहा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सिरहा',
                'municipality' => 'धनगढीमाई नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सिरहा',
                'municipality' => 'कल्याणपुर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सिरहा',
                'municipality' => 'कर्जन्हा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सिरहा',
                'municipality' => 'गोलबजार नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सिरहा',
                'municipality' => 'सुखीपुर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'धनुषा',
                'municipality' => 'औराही गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'धनुषा',
                'municipality' => 'धनौजी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'धनुषा',
                'municipality' => 'बटेश्वर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'धनुषा',
                'municipality' => 'जनकनन्दनी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'धनुषा',
                'municipality' => 'लक्ष्मीनिया गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'धनुषा',
                'municipality' => 'मुखियापट्टी मुसरमिया गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'धनुषा',
                'municipality' => 'मिथिला बिहारी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'धनुषा',
                'municipality' => 'कमला नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'धनुषा',
                'municipality' => 'नगराई नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'धनुषा',
                'municipality' => 'गणेशमान चारनाथ नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'धनुषा',
                'municipality' => 'मिथिला नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'धनुषा',
                'municipality' => 'धनुषाधाम नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'धनुषा',
                'municipality' => 'बिदेहा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'धनुषा',
                'municipality' => 'सबाइला नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'धनुषा',
                'municipality' => 'हंसपुर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'धनुषा',
                'municipality' => 'जनकपुरधाम उप-महानगरपालिका',
                'type' => 'उप-महानगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'धनुषा',
                'municipality' => 'सहिदनगर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'धनुषा',
                'municipality' => 'छिरेश्वरनाथ नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'महोत्तरी',
                'municipality' => 'पिपरा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'महोत्तरी',
                'municipality' => 'सोनामा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'महोत्तरी',
                'municipality' => 'सम्सी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'महोत्तरी',
                'municipality' => 'एकडानरा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'महोत्तरी',
                'municipality' => 'महोत्तरी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'महोत्तरी',
                'municipality' => 'गौशाला नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'महोत्तरी',
                'municipality' => 'रामगोपालपुर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'महोत्तरी',
                'municipality' => 'औरही नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'महोत्तरी',
                'municipality' => 'बर्दिवास नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'महोत्तरी',
                'municipality' => 'भङ्गाहा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'महोत्तरी',
                'municipality' => 'जलेश्वर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'महोत्तरी',
                'municipality' => 'बलवा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'महोत्तरी',
                'municipality' => 'मनरा सिसवा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'महोत्तरी',
                'municipality' => 'मटिहानी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'महोत्तरी',
                'municipality' => 'लोहारपट्टी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सर्लाही',
                'municipality' => 'धनकौल गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सर्लाही',
                'municipality' => 'पर्सा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सर्लाही',
                'municipality' => 'विष्णु गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सर्लाही',
                'municipality' => 'रामनगर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सर्लाही',
                'municipality' => 'कौडेना गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सर्लाही',
                'municipality' => 'बासबरिया गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सर्लाही',
                'municipality' => 'चन्द्रनगर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सर्लाही',
                'municipality' => 'चक्रघट्टा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सर्लाही',
                'municipality' => 'ब्रम्हपुरी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सर्लाही',
                'municipality' => 'बराहथवा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सर्लाही',
                'municipality' => 'हरिपुर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सर्लाही',
                'municipality' => 'ईश्वरपुर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सर्लाही',
                'municipality' => 'लालबन्दी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सर्लाही',
                'municipality' => 'मलङ्गवा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सर्लाही',
                'municipality' => 'कबिलासी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सर्लाही',
                'municipality' => 'बागमती नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सर्लाही',
                'municipality' => 'हरिवान नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सर्लाही',
                'municipality' => 'बलरा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सर्लाही',
                'municipality' => 'हरिपुरवा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'सर्लाही',
                'municipality' => 'गोदैता नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'रौतहट',
                'municipality' => 'यमुनामाई गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'रौतहट',
                'municipality' => 'दुर्गा भगवती गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'रौतहट',
                'municipality' => 'कटहरिया नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'रौतहट',
                'municipality' => 'मौलापुर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'रौतहट',
                'municipality' => 'माधव नारायण नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'रौतहट',
                'municipality' => 'गौर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'रौतहट',
                'municipality' => 'गुजरा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'रौतहट',
                'municipality' => 'गरुड नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'रौतहट',
                'municipality' => 'ईशानाथ नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'रौतहट',
                'municipality' => 'चन्द्रपुर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'रौतहट',
                'municipality' => 'देवाही गोनाही नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'रौतहट',
                'municipality' => 'वृन्दबन नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'रौतहट',
                'municipality' => 'राजपुर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'रौतहट',
                'municipality' => 'राजदेवी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'रौतहट',
                'municipality' => 'गढीमाई नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'रौतहट',
                'municipality' => 'विजयपुर फटुवा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'रौतहट',
                'municipality' => 'बौधिमाई नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'रौतहट',
                'municipality' => 'पारोहा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'बारा',
                'municipality' => 'फेटा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'बारा',
                'municipality' => 'देवताल गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'बारा',
                'municipality' => 'प्रसौनी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'बारा',
                'municipality' => 'सुवर्ण गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'बारा',
                'municipality' => 'बारागढी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'बारा',
                'municipality' => 'करैयामाई गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'बारा',
                'municipality' => 'परवानीपुर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'बारा',
                'municipality' => 'बिश्रामपुर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'बारा',
                'municipality' => 'आदर्शकोटवाल गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'बारा',
                'municipality' => 'जितपुर सिमरा उप-महानगरपालिका',
                'type' => 'उप-महानगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'बारा',
                'municipality' => 'कलैया उप-महानगरपालिका',
                'type' => 'उप-महानगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'बारा',
                'municipality' => 'पचरौता नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'बारा',
                'municipality' => 'निजगढ नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'बारा',
                'municipality' => 'सिम्रौनगढ नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'बारा',
                'municipality' => 'महागढीमाई नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'बारा',
                'municipality' => 'Kolhabi नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'पर्सा',
                'municipality' => 'थोरी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'पर्सा',
                'municipality' => 'धोबिनी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'पर्सा',
                'municipality' => 'छिपहरमाई गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'पर्सा',
                'municipality' => 'जिरभवानी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'पर्सा',
                'municipality' => 'जगरनाथपुर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'पर्सा',
                'municipality' => 'कालिकामाई गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'पर्सा',
                'municipality' => 'बिन्दवासिनी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'पर्सा',
                'municipality' => 'पाकहमैंपुर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'पर्सा',
                'municipality' => 'सखुवा प्रसौनी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'पर्सा',
                'municipality' => 'पटेरवा सुगौली गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'पर्सा',
                'municipality' => 'वीरगन्ज महानगरपालिका',
                'type' => 'महानगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'पर्सा',
                'municipality' => 'बहुदरमाई नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'पर्सा',
                'municipality' => 'पोखरिया नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'मधेश प्रदेश',
                'district' => 'पर्सा',
                'municipality' => 'पर्सागढी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'दोलखा',
                'municipality' => 'बिगु गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'दोलखा',
                'municipality' => 'सेलुङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'दोलखा',
                'municipality' => 'मेलुङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'दोलखा',
                'municipality' => 'बैतेश्वर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'दोलखा',
                'municipality' => 'तामाकोशी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'दोलखा',
                'municipality' => 'गौरीशंकर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'दोलखा',
                'municipality' => 'कालिञ्चोक गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'दोलखा',
                'municipality' => 'जिरी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'दोलखा',
                'municipality' => 'भीमेश्वर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'सिन्धुपाल्चोक',
                'municipality' => 'जुगल गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'सिन्धुपाल्चोक',
                'municipality' => 'बलेफी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'सिन्धुपाल्चोक',
                'municipality' => 'सुनकोशी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'सिन्धुपाल्चोक',
                'municipality' => 'हेलम्बु गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'सिन्धुपाल्चोक',
                'municipality' => 'भोटेकोशी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'सिन्धुपाल्चोक',
                'municipality' => 'लिसाङ्खु पाखर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'सिन्धुपाल्चोक',
                'municipality' => 'इन्द्रावती गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'सिन्धुपाल्चोक',
                'municipality' => 'त्रिपुरासुन्दरी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'सिन्धुपाल्चोक',
                'municipality' => 'पाँचपोखरी थाङ्पाल गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'सिन्धुपाल्चोक',
                'municipality' => 'चौतारा साँगाचोकगढी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'सिन्धुपाल्चोक',
                'municipality' => 'बरहाबिसे नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'सिन्धुपाल्चोक',
                'municipality' => 'मेलम्ची नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'रसुवा',
                'municipality' => 'Kalika गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'रसुवा',
                'municipality' => 'नौकुण्ड गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'रसुवा',
                'municipality' => 'उत्तरगया गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'रसुवा',
                'municipality' => 'गोसाइकुण्ड गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'रसुवा',
                'municipality' => 'अमाकोडिङमो गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'धादिङ',
                'municipality' => 'गजुरी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'धादिङ',
                'municipality' => 'गाल्ची गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'धादिङ',
                'municipality' => 'ठाकरे गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'धादिङ',
                'municipality' => 'सिद्धलेक गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'धादिङ',
                'municipality' => 'खनियाबास गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'धादिङ',
                'municipality' => 'ज्वालामुखी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'धादिङ',
                'municipality' => 'गंगाजमुना गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'धादिङ',
                'municipality' => 'रुबी उपत्यका गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'धादिङ',
                'municipality' => 'त्रिपुरा सुन्दरी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'धादिङ',
                'municipality' => 'नेत्रावती डब्जोङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'धादिङ',
                'municipality' => 'बेनीघाट रोराङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'धादिङ',
                'municipality' => 'नीलकण्ठ नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'धादिङ',
                'municipality' => 'धुनिबेसी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'नुवाकोट',
                'municipality' => 'ककनी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'नुवाकोट',
                'municipality' => 'ताडी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'नुवाकोट',
                'municipality' => 'लिखु गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'नुवाकोट',
                'municipality' => 'म्यागाङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'नुवाकोट',
                'municipality' => 'शिवपुरी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'नुवाकोट',
                'municipality' => 'किस्पाङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'नुवाकोट',
                'municipality' => 'सुर्यगढी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'नुवाकोट',
                'municipality' => 'तारकेश्वर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'नुवाकोट',
                'municipality' => 'पञ्चकन्या गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'नुवाकोट',
                'municipality' => 'दुप्चेश्वर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'नुवाकोट',
                'municipality' => 'बेलकोटगढी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'नुवाकोट',
                'municipality' => 'बिदुर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'काठमाडौं',
                'municipality' => 'कीर्तिपुर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'काठमाडौं',
                'municipality' => 'शंखरापुर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'काठमाडौं',
                'municipality' => 'नागार्जुन नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'काठमाडौं',
                'municipality' => 'कागेश्वरी मनहोरा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'काठमाडौं',
                'municipality' => 'दक्षिणकाली नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'काठमाडौं',
                'municipality' => 'बुढानिलकण्ठ नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'काठमाडौं',
                'municipality' => 'Tarakeshwor नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'काठमाडौं',
                'municipality' => 'काठमाडौं महानगरपालिका',
                'type' => 'महानगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'काठमाडौं',
                'municipality' => 'Tokha नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'काठमाडौं',
                'municipality' => 'चन्द्रागिरि नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'काठमाडौं',
                'municipality' => 'गोकर्णेश्वर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'भक्तपुर',
                'municipality' => 'चाँगुनारायण नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'भक्तपुर',
                'municipality' => 'सूर्यविनायक नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'भक्तपुर',
                'municipality' => 'भक्तपुर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'भक्तपुर',
                'municipality' => 'मध्यपुरथिमि नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'ललितपुर',
                'municipality' => 'बागमती गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'ललितपुर',
                'municipality' => 'महांकाल गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'ललितपुर',
                'municipality' => 'कोन्ज्योसोम गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'ललितपुर',
                'municipality' => 'ललितपुर महानगरपालिका',
                'type' => 'महानगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'ललितपुर',
                'municipality' => 'महालक्ष्मी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'ललितपुर',
                'municipality' => 'गोदावरी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'काभ्रेपलाञ्चोक',
                'municipality' => 'रोशी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'काभ्रेपलाञ्चोक',
                'municipality' => 'तेमल गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'काभ्रेपलाञ्चोक',
                'municipality' => 'भुम्लु गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'काभ्रेपलाञ्चोक',
                'municipality' => 'महाभारत गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'काभ्रेपलाञ्चोक',
                'municipality' => 'बेथानचोक गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'काभ्रेपलाञ्चोक',
                'municipality' => 'खानीखोला गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'काभ्रेपलाञ्चोक',
                'municipality' => 'चौरीदेउराली गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'काभ्रेपलाञ्चोक',
                'municipality' => 'बनेपा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'काभ्रेपलाञ्चोक',
                'municipality' => 'मण्डनदेउपुर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'काभ्रेपलाञ्चोक',
                'municipality' => 'धुलिखेल नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'काभ्रेपलाञ्चोक',
                'municipality' => 'पनौती नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'काभ्रेपलाञ्चोक',
                'municipality' => 'नमोबुद्ध नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'काभ्रेपलाञ्चोक',
                'municipality' => 'पाँचखाल नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'रामेछाप',
                'municipality' => 'सुनापति गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'रामेछाप',
                'municipality' => 'दोरम्बा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'रामेछाप',
                'municipality' => 'उमाकुण्ड गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'रामेछाप',
                'municipality' => 'खाडादेवी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'रामेछाप',
                'municipality' => 'गोकुलगंगा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'रामेछाप',
                'municipality' => 'लिखु तामाकोशीi गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'रामेछाप',
                'municipality' => 'मन्थली नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'रामेछाप',
                'municipality' => 'रामेछाप नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'सिन्धुली',
                'municipality' => 'मारिन गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'सिन्धुली',
                'municipality' => 'फिक्कल गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'सिन्धुली',
                'municipality' => 'तीनपाटन गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'सिन्धुली',
                'municipality' => 'सुनकोशी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'सिन्धुली',
                'municipality' => 'गोलन्जोर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'सिन्धुली',
                'municipality' => 'घाङ्लेख गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'सिन्धुली',
                'municipality' => 'हरिहरपुरगढी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'सिन्धुली',
                'municipality' => 'दुधौली नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'सिन्धुली',
                'municipality' => 'कमलामाई नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'मकवानपुर',
                'municipality' => 'बकैया गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'मकवानपुर',
                'municipality' => 'कैलाश गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'मकवानपुर',
                'municipality' => 'मनहरी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'मकवानपुर',
                'municipality' => 'भीमफेदी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'मकवानपुर',
                'municipality' => 'बागमती गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'मकवानपुर',
                'municipality' => 'रक्सिराङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'मकवानपुर',
                'municipality' => 'मकवानपुरगढी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'मकवानपुर',
                'municipality' => 'इन्द्रसरोवर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'मकवानपुर',
                'municipality' => 'हेटौंडा उप-महानगरपालिका',
                'type' => 'उप-महानगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'मकवानपुर',
                'municipality' => 'थाहा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'चितवन',
                'municipality' => 'इच्छाकामना गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'चितवन',
                'municipality' => 'भरतपुर महानगरपालिका',
                'type' => 'महानगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'चितवन',
                'municipality' => 'कालिका नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'चितवन',
                'municipality' => 'खैरहनी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'चितवन',
                'municipality' => 'माडी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'चितवन',
                'municipality' => 'राप्ती नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'बागमती प्रदेश',
                'district' => 'चितवन',
                'municipality' => 'रत्ननगर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'गोरखा',
                'municipality' => 'गण्डकी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'गोरखा',
                'municipality' => 'धार्चे गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'गोरखा',
                'municipality' => 'आरुघाट गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'गोरखा',
                'municipality' => 'अजिरकोट गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'गोरखा',
                'municipality' => 'सहिद लखन गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'गोरखा',
                'municipality' => 'सिरञ्चोक गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'गोरखा',
                'municipality' => 'भीमसेनथापा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'गोरखा',
                'municipality' => 'चुम नुब्रि गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'गोरखा',
                'municipality' => 'बारपाक सुलिकोट गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'गोरखा',
                'municipality' => 'पालुङटार नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'गोरखा',
                'municipality' => 'गोरखा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'मनाङ',
                'municipality' => 'चामे गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'मनाङ',
                'municipality' => 'नरशोन गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'मनाङ',
                'municipality' => 'नरपा भूमि गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'मनाङ',
                'municipality' => 'मनाङ इङ्स्याङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'मुस्ताङ',
                'municipality' => 'थासाङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'मुस्ताङ',
                'municipality' => 'घरापझोङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'मुस्ताङ',
                'municipality' => 'लोमान्थाङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'मुस्ताङ',
                'municipality' => 'लो-घेकर दामोदरकुण्ड गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'मुस्ताङ',
                'municipality' => 'वारागुङ मुक्तिक्षेत्र गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'म्याग्दी',
                'municipality' => 'मंगला गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'म्याग्दी',
                'municipality' => 'मलिका गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'म्याग्दी',
                'municipality' => 'रघुगंगा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'म्याग्दी',
                'municipality' => 'धौलागिरी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'म्याग्दी',
                'municipality' => 'अन्नपूर्ण गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'म्याग्दी',
                'municipality' => 'बेनी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'कास्की',
                'municipality' => 'रुपा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'कास्की',
                'municipality' => 'माडी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'कास्की',
                'municipality' => 'अन्नपूर्ण गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'कास्की',
                'municipality' => 'माछापुच्छ्रे गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'कास्की',
                'municipality' => 'पोखरा महानगरपालिका',
                'type' => 'महानगरपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'लमजुङ',
                'municipality' => 'दोर्दी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'लमजुङ',
                'municipality' => 'दूधपोखरी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'लमजुङ',
                'municipality' => 'मर्स्याङ्दी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'लमजुङ',
                'municipality' => 'क्वालासोथर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'लमजुङ',
                'municipality' => 'सुन्दरबजार नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'लमजुङ',
                'municipality' => 'बेशिशहर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'लमजुङ',
                'municipality' => 'रैनास नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'लमजुङ',
                'municipality' => 'मध्यनेपाल नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'तनहुँ',
                'municipality' => 'घिरिङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'तनहुँ',
                'municipality' => 'देवघाट गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'तनहुँ',
                'municipality' => 'रिसिङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'तनहुँ',
                'municipality' => 'म्याग्दे गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'तनहुँ',
                'municipality' => 'बन्दीपुर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'तनहुँ',
                'municipality' => 'अन्बुखैरेनी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'तनहुँ',
                'municipality' => 'ब्यास नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'तनहुँ',
                'municipality' => 'शुक्लागण्डकी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'तनहुँ',
                'municipality' => 'भीमद नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'तनहुँ',
                'municipality' => 'भानु नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'नवलपरासी पूर्व',
                'municipality' => 'बौदेकाली गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'नवलपरासी पूर्व',
                'municipality' => 'बुलिङटार गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'नवलपरासी पूर्व',
                'municipality' => 'हुप्सेकोट गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'नवलपरासी पूर्व',
                'municipality' => 'विनयी त्रिवेणी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'नवलपरासी पूर्व',
                'municipality' => 'मध्यविन्दु नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'नवलपरासी पूर्व',
                'municipality' => 'देवचुली नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'नवलपरासी पूर्व',
                'municipality' => 'गैडाकोट नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'नवलपरासी पूर्व',
                'municipality' => 'कावासोती नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'स्याङ्जा',
                'municipality' => 'हरिनास गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'स्याङ्जा',
                'municipality' => 'बिरुवा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'स्याङ्जा',
                'municipality' => 'आँधीखोला गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'स्याङ्जा',
                'municipality' => 'फेदीखोला गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'स्याङ्जा',
                'municipality' => 'कालीगण्डगी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'स्याङ्जा',
                'municipality' => 'अर्जुनचौपरी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'स्याङ्जा',
                'municipality' => 'पुतलीबजार नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'स्याङ्जा',
                'municipality' => 'भिरकोट नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'स्याङ्जा',
                'municipality' => 'गल्याङ नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'स्याङ्जा',
                'municipality' => 'चापाकोट नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'स्याङ्जा',
                'municipality' => 'वालिङ नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'पर्बत',
                'municipality' => 'मोदी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'पर्बत',
                'municipality' => 'पाइन्यु गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'पर्बत',
                'municipality' => 'जलजला गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'पर्बत',
                'municipality' => 'बिहादी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'पर्बत',
                'municipality' => 'महाशिला गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'पर्बत',
                'municipality' => 'कुश्मा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'पर्बत',
                'municipality' => 'फलेबास नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'बागलुङ',
                'municipality' => 'बरेङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'बागलुङ',
                'municipality' => 'बडिगाड गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'बागलुङ',
                'municipality' => 'निसिखोला गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'बागलुङ',
                'municipality' => 'कान्ठेखोला गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'बागलुङ',
                'municipality' => 'तारा खोला गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'बागलुङ',
                'municipality' => 'तमन खोला गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'बागलुङ',
                'municipality' => 'जैमुनी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'बागलुङ',
                'municipality' => 'बागलुङ नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'बागलुङ',
                'municipality' => 'गलकोट नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'गण्डकी प्रदेश',
                'district' => 'बागलुङ',
                'municipality' => 'ढोरपाटन नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'पूर्वी रुकुम',
                'municipality' => 'भुमे गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'पूर्वी रुकुम',
                'municipality' => 'सिस्ने गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'पूर्वी रुकुम',
                'municipality' => 'पुथा उत्तरगंगा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'रोल्पा',
                'municipality' => 'माडी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'रोल्पा',
                'municipality' => 'थवाङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'रोल्पा',
                'municipality' => 'सुनछहरी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'रोल्पा',
                'municipality' => 'लुङ्गरी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'रोल्पा',
                'municipality' => 'गंगादेव गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'रोल्पा',
                'municipality' => 'त्रिवेणी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'रोल्पा',
                'municipality' => 'परिवर्तन गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'रोल्पा',
                'municipality' => 'रुन्टीगढी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'रोल्पा',
                'municipality' => 'सुनिल स्मृति गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'रोल्पा',
                'municipality' => 'रोल्पा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'प्युठान',
                'municipality' => 'आइराबती गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'प्युठान',
                'municipality' => 'गौमुखी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'प्युठान',
                'municipality' => 'झिमरुक गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'प्युठान',
                'municipality' => 'नौवहिनी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'प्युठान',
                'municipality' => 'मांडवी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'प्युठान',
                'municipality' => 'मल्लरानी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'प्युठान',
                'municipality' => 'सरूमरानी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'प्युठान',
                'municipality' => 'प्युठान नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'प्युठान',
                'municipality' => 'स्वर्गद्वारी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'गुल्मी',
                'municipality' => 'रुरु गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'गुल्मी',
                'municipality' => 'इस्मा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'गुल्मी',
                'municipality' => 'मदने गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'गुल्मी',
                'municipality' => 'मलिका गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'गुल्मी',
                'municipality' => 'चत्रकोट गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'गुल्मी',
                'municipality' => 'धुर्कोट गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'गुल्मी',
                'municipality' => 'सत्यवती गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'गुल्मी',
                'municipality' => 'चन्द्रकोट गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'गुल्मी',
                'municipality' => 'कालीगण्डकी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'गुल्मी',
                'municipality' => 'गुल्मीदरबार गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'गुल्मी',
                'municipality' => 'रेसुंगा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'गुल्मी',
                'municipality' => 'मुसिकोट नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'अर्घाखाँची',
                'municipality' => 'पाणिनी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'अर्घाखाँची',
                'municipality' => 'छत्रदेव गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'अर्घाखाँची',
                'municipality' => 'मलारानी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'अर्घाखाँची',
                'municipality' => 'भुमेकस्थान नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'अर्घाखाँची',
                'municipality' => 'सितगंगा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'अर्घाखाँची',
                'municipality' => 'सन्धिखर्क नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'पाल्पा',
                'municipality' => 'रम्भा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'पाल्पा',
                'municipality' => 'तिनाउ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'पाल्पा',
                'municipality' => 'निस्दी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'पाल्पा',
                'municipality' => 'मठगढी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'पाल्पा',
                'municipality' => 'रिब्दीकोट गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'पाल्पा',
                'municipality' => 'पूर्वखोला गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'पाल्पा',
                'municipality' => 'बागनास्कली गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'पाल्पा',
                'municipality' => 'रैनादेवी छहरा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'पाल्पा',
                'municipality' => 'तानसेन नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'पाल्पा',
                'municipality' => 'रामपुर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'नवलपरासी पश्चिम',
                'municipality' => 'सरवल गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'नवलपरासी पश्चिम',
                'municipality' => 'सुस्ता गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'नवलपरासी पश्चिम',
                'municipality' => 'प्रतापपुर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'नवलपरासी पश्चिम',
                'municipality' => 'पाल्ही नन्दन गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'नवलपरासी पश्चिम',
                'municipality' => 'बर्दघाट नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'नवलपरासी पश्चिम',
                'municipality' => 'सुनवल नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'नवलपरासी पश्चिम',
                'municipality' => 'रामग्राम नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'रुपन्देही',
                'municipality' => 'कञ्चन गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'रुपन्देही',
                'municipality' => 'सियारी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'रुपन्देही',
                'municipality' => 'रोहिणी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'रुपन्देही',
                'municipality' => 'गैडहवा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'रुपन्देही',
                'municipality' => 'ओमसतिया गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'रुपन्देही',
                'municipality' => 'शुद्धोधन गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'रुपन्देही',
                'municipality' => 'मायादेवी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'रुपन्देही',
                'municipality' => 'मार्चवारी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'रुपन्देही',
                'municipality' => 'कोटाहिमाई गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'रुपन्देही',
                'municipality' => 'समरीमाई गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'रुपन्देही',
                'municipality' => 'बुटवल उप-महानगरपालिका',
                'type' => 'उप-महानगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'रुपन्देही',
                'municipality' => 'लुम्बिनी संस्कृतिक नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'रुपन्देही',
                'municipality' => 'देवदह नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'रुपन्देही',
                'municipality' => 'सैनामैना नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'रुपन्देही',
                'municipality' => 'सिद्धार्थनगर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'रुपन्देही',
                'municipality' => 'तिलोतमा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'कपिलवस्तु',
                'municipality' => 'यशोधरा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'कपिलवस्तु',
                'municipality' => 'विजयनगर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'कपिलवस्तु',
                'municipality' => 'मायादेवी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'कपिलवस्तु',
                'municipality' => 'शुद्धोधन गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'कपिलवस्तु',
                'municipality' => 'शिवराज नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'कपिलवस्तु',
                'municipality' => 'कपिलवस्तु नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'कपिलवस्तु',
                'municipality' => 'बुद्धभूमि नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'कपिलवस्तु',
                'municipality' => 'महाराजगन्ज नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'कपिलवस्तु',
                'municipality' => 'बाणगंगा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'कपिलवस्तु',
                'municipality' => 'कृष्णनगर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'दाङ',
                'municipality' => 'बबई गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'दाङ',
                'municipality' => 'गढवा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'दाङ',
                'municipality' => 'राप्ती गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'दाङ',
                'municipality' => 'राजपुर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'दाङ',
                'municipality' => 'दंगिशरण गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'दाङ',
                'municipality' => 'शान्तिनगर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'दाङ',
                'municipality' => 'बंगलाचुली गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'दाङ',
                'municipality' => 'तुलसीपुर उप-महानगरपालिका',
                'type' => 'उप-महानगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'दाङ',
                'municipality' => 'घोराही उप-महानगरपालिका',
                'type' => 'उप-महानगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'दाङ',
                'municipality' => 'लमही नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'बाँके',
                'municipality' => 'खजुरा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'बाँके',
                'municipality' => 'जानकी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'बाँके',
                'municipality' => 'बैजनाथ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'बाँके',
                'municipality' => 'डुडुवा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'बाँके',
                'municipality' => 'नरैनापुर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'बाँके',
                'municipality' => 'राप्ती सोनारी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'बाँके',
                'municipality' => 'कोहलपुर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'बाँके',
                'municipality' => 'नेपालगन्ज उप-महानगरपालिका',
                'type' => 'उप-महानगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'बर्दिया',
                'municipality' => 'गेरुवा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'बर्दिया',
                'municipality' => 'बढैयाताल गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'बर्दिया',
                'municipality' => 'ठाकुरबाबा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'बर्दिया',
                'municipality' => 'बाँसागढी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'बर्दिया',
                'municipality' => 'बारबर्दिया नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'बर्दिया',
                'municipality' => 'राजापुर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'बर्दिया',
                'municipality' => 'मधुवन नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'लुम्बिनी प्रदेश',
                'district' => 'बर्दिया',
                'municipality' => 'गुलरिया नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'डोल्पा',
                'municipality' => 'काइके गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'डोल्पा',
                'municipality' => 'जगदुल्ला गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'डोल्पा',
                'municipality' => 'मुड्केचुला गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'डोल्पा',
                'municipality' => 'डोल्पो बुद्ध गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'डोल्पा',
                'municipality' => 'शे-फोक्सुण्डो गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'डोल्पा',
                'municipality' => 'छर्का ताङसोङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'डोल्पा',
                'municipality' => 'त्रिपुरासुन्दरी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'डोल्पा',
                'municipality' => 'ठुली भेरी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'मुगु',
                'municipality' => 'सोरु गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'मुगु',
                'municipality' => 'खत्याड गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'मुगु',
                'municipality' => 'मुगूम कार्मारोङ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'मुगु',
                'municipality' => 'छायानाथ रारा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'हुम्ला',
                'municipality' => 'सिमकोट गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'हुम्ला',
                'municipality' => 'नम्खा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'हुम्ला',
                'municipality' => 'चनखेली गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'हुम्ला',
                'municipality' => 'तान्जाकोट गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'हुम्ला',
                'municipality' => 'सार्केगड गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'हुम्ला',
                'municipality' => 'अडांचुली गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'हुम्ला',
                'municipality' => 'खार्पुनाथ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'जुम्ला',
                'municipality' => 'हिमा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'जुम्ला',
                'municipality' => 'तिला गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'जुम्ला',
                'municipality' => 'सिन्जा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'जुम्ला',
                'municipality' => 'गुठीचौर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'जुम्ला',
                'municipality' => 'तातोपानी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'जुम्ला',
                'municipality' => 'पत्रासी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'जुम्ला',
                'municipality' => 'कनकसुन्दरी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'जुम्ला',
                'municipality' => 'चन्दननाथ नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'कालिकोट',
                'municipality' => 'महावाई गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'कालिकोट',
                'municipality' => 'पलाता गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'कालिकोट',
                'municipality' => 'नरहरिनाथ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'कालिकोट',
                'municipality' => 'पाँचलझरना गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'कालिकोट',
                'municipality' => 'शुभ कालिका गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'कालिकोट',
                'municipality' => 'सन्नी त्रिवेणी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'कालिकोट',
                'municipality' => 'खंडचक्र नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'कालिकोट',
                'municipality' => 'रास्कोट नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'कालिकोट',
                'municipality' => 'तिलागुफा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'दैलेख',
                'municipality' => 'भैरवी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'दैलेख',
                'municipality' => 'महाबु गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'दैलेख',
                'municipality' => 'गुराँस गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'दैलेख',
                'municipality' => 'नौमुले गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'दैलेख',
                'municipality' => 'भगवतीमाई गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'दैलेख',
                'municipality' => 'ठान्टिकाण्ड गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'दैलेख',
                'municipality' => 'डुङ्गेश्वर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'दैलेख',
                'municipality' => 'आठबिस नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'दैलेख',
                'municipality' => 'दुल्लु नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'दैलेख',
                'municipality' => 'चामुण्डा बिन्द्रसैनी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'दैलेख',
                'municipality' => 'नारायण नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'जाजरकोट',
                'municipality' => 'कुसे गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'जाजरकोट',
                'municipality' => 'शिवालय गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'जाजरकोट',
                'municipality' => 'बारेकोट गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'जाजरकोट',
                'municipality' => 'जुनिचन्दे गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'जाजरकोट',
                'municipality' => 'नालागड नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'जाजरकोट',
                'municipality' => 'भेरी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'जाजरकोट',
                'municipality' => 'छेडागढ नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'रुकुम पश्चिम',
                'municipality' => 'त्रिवेणी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'रुकुम पश्चिम',
                'municipality' => 'सानी भेरी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'रुकुम पश्चिम',
                'municipality' => 'बनफिकोट गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'रुकुम पश्चिम',
                'municipality' => 'आठबिस्कोट नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'रुकुम पश्चिम',
                'municipality' => 'चौरजहारी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'रुकुम पश्चिम',
                'municipality' => 'मुसिकोट नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'सल्यान',
                'municipality' => 'कुमाख गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'सल्यान',
                'municipality' => 'डार्मा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'सल्यान',
                'municipality' => 'कपुरकोट गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'सल्यान',
                'municipality' => 'कालीमाटी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'सल्यान',
                'municipality' => 'त्रिवेणी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'सल्यान',
                'municipality' => 'छत्रेश्वरी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'सल्यान',
                'municipality' => 'सिद्ध कुमाख गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'सल्यान',
                'municipality' => 'शारदा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'सल्यान',
                'municipality' => 'बांगद कुपिन्दे नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'सल्यान',
                'municipality' => 'बागचौर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'सुर्खेत',
                'municipality' => 'चौकुने गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'सुर्खेत',
                'municipality' => 'चौकुने गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'सुर्खेत',
                'municipality' => 'चिंगाड गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'सुर्खेत',
                'municipality' => 'बारहताल गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'सुर्खेत',
                'municipality' => 'गुर्भाकोट नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'सुर्खेत',
                'municipality' => 'पञ्चपुरी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'सुर्खेत',
                'municipality' => 'भेरीगंगा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'सुर्खेत',
                'municipality' => 'लेकबेशी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'कर्णाली प्रदेश',
                'district' => 'सुर्खेत',
                'municipality' => 'वीरेन्द्रनगर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बाजुरा',
                'municipality' => 'गौमुल गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बाजुरा',
                'municipality' => 'हिमाली गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बाजुरा',
                'municipality' => 'जगन्नाथ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बाजुरा',
                'municipality' => 'खप्तड छेडेदह गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बाजुरा',
                'municipality' => 'स्वामी कार्तिक खापर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बाजुरा',
                'municipality' => 'बडिमालिका नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बाजुरा',
                'municipality' => 'त्रिवेणी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बाजुरा',
                'municipality' => 'बुढीगंगा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बाजुरा',
                'municipality' => 'बुढीनन्द नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बझाङ',
                'municipality' => 'मस्टा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बझाङ',
                'municipality' => 'थलारा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बझाङ',
                'municipality' => 'तलकोट गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बझाङ',
                'municipality' => 'सुर्मा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बझाङ',
                'municipality' => 'सैपाल गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बझाङ',
                'municipality' => 'दुर्गाथली गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बझाङ',
                'municipality' => 'बिथडचिर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बझाङ',
                'municipality' => 'केदारसिउ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बझाङ',
                'municipality' => 'खप्तड छान्ना गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बझाङ',
                'municipality' => 'छबिस पाथीभेरा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बझाङ',
                'municipality' => 'जय पृथ्वी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बझाङ',
                'municipality' => 'बुंगल नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'दार्चुला',
                'municipality' => 'लेकम गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'दार्चुला',
                'municipality' => 'नौगाड गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'दार्चुला',
                'municipality' => 'ब्यास गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'दार्चुला',
                'municipality' => 'दुन्हु गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'दार्चुला',
                'municipality' => 'मर्मा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'दार्चुला',
                'municipality' => 'अपि हिमाल गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'दार्चुला',
                'municipality' => 'माल्लिकार्जुन गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'दार्चुला',
                'municipality' => 'महाकाली नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'दार्चुला',
                'municipality' => 'शैल्यशिखर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बैतडी',
                'municipality' => 'सिगास गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बैतडी',
                'municipality' => 'शिवनाथ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बैतडी',
                'municipality' => 'सुर्नाया गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बैतडी',
                'municipality' => 'डिलासैनी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बैतडी',
                'municipality' => 'पञ्चेश्वर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बैतडी',
                'municipality' => 'दोगडाकेदार गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बैतडी',
                'municipality' => 'मेलौली नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बैतडी',
                'municipality' => 'दशरथचन्द नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बैतडी',
                'municipality' => 'पुर्चौडी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'बैतडी',
                'municipality' => 'पाटन नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'डडेल्धुरा',
                'municipality' => 'अलिताल गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'डडेल्धुरा',
                'municipality' => 'अजयमेरु गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'डडेल्धुरा',
                'municipality' => 'भागेश्वर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'डडेल्धुरा',
                'municipality' => 'नवदुर्गा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'डडेल्धुरा',
                'municipality' => 'गन्यापधुरा गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'डडेल्धुरा',
                'municipality' => 'अमरगढी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'डडेल्धुरा',
                'municipality' => 'परशुराम नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'डोटी',
                'municipality' => 'सायल गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'डोटी',
                'municipality' => 'आदर्श गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'डोटी',
                'municipality' => 'जोरयाल गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'डोटी',
                'municipality' => 'बडीकेदार गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'डोटी',
                'municipality' => 'पुर्बीचौकी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'डोटी',
                'municipality' => 'के आई सिंह गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'डोटी',
                'municipality' => 'बोगटान फूडसिल गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'डोटी',
                'municipality' => 'दिपायल सिलगढी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'डोटी',
                'municipality' => 'शिखर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'अछाम',
                'municipality' => 'ढकारी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'अछाम',
                'municipality' => 'मेल्लेख गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'अछाम',
                'municipality' => 'चौरपाटी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'अछाम',
                'municipality' => 'रामरोशन गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'अछाम',
                'municipality' => 'तुर्मखाद गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'अछाम',
                'municipality' => 'बान्नीगढी जयगढ गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'अछाम',
                'municipality' => 'साँफेबगर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'अछाम',
                'municipality' => 'मंगलसेन नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'अछाम',
                'municipality' => 'कमलबजार नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'अछाम',
                'municipality' => 'पञ्चदेवल विनायक नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'कैलाली',
                'municipality' => 'चुरे गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'कैलाली',
                'municipality' => 'जानकी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'कैलाली',
                'municipality' => 'कैलारी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'कैलाली',
                'municipality' => 'जोशीपुर गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'कैलाली',
                'municipality' => 'मोहन्याल गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'कैलाली',
                'municipality' => 'बर्दगोरिया गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'कैलाली',
                'municipality' => 'टीकापुर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'कैलाली',
                'municipality' => 'घोडाघोडी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'कैलाली',
                'municipality' => 'भजनी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'कैलाली',
                'municipality' => 'धनगढी उपमहानगरपालिका',
                'type' => 'उपमहानगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'कैलाली',
                'municipality' => 'गौरीगंगा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'कैलाली',
                'municipality' => 'गोदावरी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'कैलाली',
                'municipality' => 'लम्की चुहा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'कञ्चनपुर',
                'municipality' => 'बेलडाँडी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'कञ्चनपुर',
                'municipality' => 'लालझाडी गाउँपालिका',
                'type' => 'गाउँपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'कञ्चनपुर',
                'municipality' => 'पुनर्वास नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'कञ्चनपुर',
                'municipality' => 'कृष्णपुर नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'कञ्चनपुर',
                'municipality' => 'महाकाली नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'कञ्चनपुर',
                'municipality' => 'बेदकोट नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'कञ्चनपुर',
                'municipality' => 'बेलौरी नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'कञ्चनपुर',
                'municipality' => 'भीमदत्त नगरपालिका',
                'type' => 'नगरपालिका'
            ],
            [
                'province' => 'सुदूरपश्चिम प्रदेश',
                'district' => 'कञ्चनपुर',
                'municipality' => 'शुक्लाफाँटा नगरपालिका',
                'type' => 'नगरपालिका'
            ],
        ];
        foreach ($muncipalities as $muncipality) {
            Municipality::firstOrCreate($muncipality);
        }
    }
}
