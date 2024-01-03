import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            width:{
                'logo':'428px',
                '750px':'750px',
                '200px':'200px',
                '350px':'350px',
                 '583px':'583px',
                 '910px':'910px',
                  '30px':'30px',
                  '395.5px':'395.5px',
                  '1700px':'1700px',
                  '2240px':'2240px',
                  '250px':'250px',
                  '150px':'150px',
                  '300px':'300px',
                  '730px':'730px',
                  '850px':'850px',
                  '17px': '17px',
                  '280px':'280px',
                  '20px':'20px',
                  '24px':'24px'

            },
            height:{
                'logo':'250px',
                '108px':'108px',
                '159px':'159px',
                '128px':'128px',
                '1149px':'1149px',
                '50px':'50px',
                '36px':'36px',
                '1100px':'1100px',
                '54px':'54px',
                '40px':'40px',
                '30px':'30px',
                '500px':'500px',
                '183px':'183px',
                '21px':'21px',
                '20px':'20px'
              

            },
            maxWidth:{
                '440px':'440px'
            },
            margin:{
                'lo':'300px'
            },
            margin:{
                'l':'110px',
                '130px': '130px',
                '50px': '50px',
                '350px':'350px',
                '80px':'80px',
                '1405px':'1405px',
               ' 1000px':'1000px',
                '611px':'611px',
                '105px':'105px',
                '870px':'870px',
                '920px':'920px',
                '1370px':'1370px',
                '15px':'15px',
                '600px':'600px',
                '27px':'27px',
                '665px':'665px',
                '35px':'35px',
                '730px':'730px',
                '39px': '39px',
                '114px':'114px',
                '68px':'68px',
                '30px':'30px',
                '40px':'40px',
                '120px':'120px',
                '60px':'60px',
                '20px':'20px',
                '455px':'455px',
                '1292px':'1292',
                '850px':'850px',
                '1100px':'1100px',
                '109px':'109px',
                '100px':'100px',
                '250px':'250px',
                '260px':'260px',
               '1200px':'1200px',
                '500px':'500px',
                '750px':'750px',
                '1595px':'1595px',
                '950px':'950px',
                '177px':'177px',
                '832px':'832px',
                '1209px':'1209px',
                '455px':'455px',
                '1178px':'1178px',
                '70px':'70px',
                '1100px':'1100px',
                '940px':'940px',
                '180px':'180px',
                '125px':'125px',
                '550px':'550px',
                '700px':'700px',
                '30px':'30px',
                '25px':'25px',
                '18px':'18px',
                '36px':'36px',
                '800px':'800px',
                '42px':'42px',
                '325px':'325px',
                '1162px':'1162px',
                '965px':'965px',
                '26px':'26px',
                '1070px':'1070px',
                '330px':'330px',
                '19px':'19px'

               
                
            },
            padding: {
                '50px': '50px',
                '27px': '27px',
                '35.3px':'35.3px',
                '40px':'40px'
            },
            padding: {
                '150px': '150px'
            },
            
            boxShadow:{ 
                 ' 2xl':'5px 5px 10px 0px rgba(161, 172, 184, 0.12)',
                '3xl': '5px 5px 10px 4px rgba(161, 172, 184, 0.15)',
        },
    },
    },

    plugins: [forms],
};
