using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace part3
{
    class Program
    {
        static double fun(double x)
        {
            return Math.Pow(x, 4) * 2 - Math.Pow(x, 3) * 8 + Math.Pow(x, 2) * 8 - 1;
        }
        static void Main(string[] args)
        {
            Console.WriteLine("Метод хорд");
            Console.WriteLine("Введите значение x");
            double x = double.Parse(Console.ReadLine());
            Console.WriteLine("Введите значение точности");
            double e = double.Parse(Console.ReadLine());
            Console.WriteLine("Ввести неподвижное значение p");
            double b = double.Parse(Console.ReadLine());
            double n = 0, p = 0, x1, b1;
            if (fun(x) * (-2 * x) < 0)
            {
                Console.WriteLine("сходится");
                do
                {
                    x1 = x - fun(x) * (x - b) / (fun(x) - fun(b));
                    p = Math.Abs(x1 - x);
                    x = x1;
                    n++;
                } while (p > e);
            }
            else
            {
                Console.WriteLine("не сходится");
                do
                {
                    b1 = b - fun(b) * (b - x) / (fun(b) - fun(x));
                    p = Math.Abs(b1 - b);
                    b = b1;
                    n++;
                } while (p > e);
            }
            Console.WriteLine("x = " + x + " f(x) = " + Math.Round(fun(x), 5) + " n = " + n);
            Console.ReadKey();

        }
    }
}
