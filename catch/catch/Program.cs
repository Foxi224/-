using System;

namespace cart18
{ 
    class Program
{
    static void Main(string[] args)
    {
            try
            {
                int x = 5;
                int y = x * 5;
                Console.WriteLine($"Решение= {y}");
            }
            catch
            {
                Console.WriteLine("Возникло исключение!");
            
            
            }
    }
}
}
