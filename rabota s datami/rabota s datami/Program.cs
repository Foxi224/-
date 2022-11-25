using System;
using System.Globalization;

namespace rabota_s_datami
{
    class Program
    {
        static void Main(string[] args)
        {
            /* Применяем Parse
             * Console.WriteLine("Введите строку:");
             * string input = Console.ReadLine();
            bool result = int.TryParse(input, out var number);
            if (result == true)
            Console.WriteLine($"Преобразование прошло успешно. Число: {number}");
            else
            Console.WriteLine("Преобразование завершилось неудачно");
            /* Применяем ParseExact()
            string dateString, format;
            DateTime result;
            CultureInfo provider = CultureInfo.InvariantCulture;
            // Parse значение только для даты с инвариантной культурой.
            dateString = "06/15/2008";
            format = "d";
            try {
            result = DateTime.ParseExact(dateString, format, provider);
            Console.WriteLine("{0} конвертировать в {1}.", dateString, result.ToString());
            }
            catch (FormatException) {
            Console.WriteLine("{0} is not in the correct format.", dateString);
            /* Применяем TryParse
            DateTime dtDate;
            string strDate;
            CultureInfo provider = CultureInfo.CreateSpecificCulture("ru-RU");
            DateTimeStyles styles = DateTimeStyles.None;

            string strSuccess = "'{0}' -> {1}";
            string strFailure = "Ошибка: '{0}'.";

            strDate = "30.10.2021";

            if (DateTime.TryParse(strDate, provider, styles, out dtDate))
            {
                Console.WriteLine(strSuccess, strDate, dtDate);
            }
            else
            {
                Console.WriteLine(strFailure, strDate);
            }

            strDate = "10.30.2021";
            if (DateTime.TryParse(strDate, provider, styles, out dtDate))
            {
                Console.WriteLine(strSuccess, strDate, dtDate);
            }
            else
            {
                Console.WriteLine(strFailure, strDate);
            */



        }
    }
    }
