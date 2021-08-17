using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace part2
{
    class Program
    {
        static double funs(double x) //метод для нахождения функции
        {
            return -(1+x*x*x)/3;
        }
        static double fun(double x)
        {
            return (x * x * x + 3 * x + 1);
        }
        static void Main(string[] args)
        {
            Console.WriteLine("Метод простых итераций");
            Console.WriteLine("Введите значение x");
            double x = double.Parse(Console.ReadLine());
            Console.WriteLine("Введите значение точности");
            double e = double.Parse(Console.ReadLine());
            double n = 0, p = 0, x1;
            //проверка сходимости
            if (Math.Abs(-x * x) < 1)
            {
                Console.WriteLine("процесс итераций сходится с любой точностью");
            }
            else
                Console.WriteLine("не сходится");
            do
            {
                x1 = funs(x);
                p = Math.Abs(x1 - x);
                x = x1;
                n++;
            } while (p > e);
            Console.WriteLine("x = " + x + " f(x) = " + Math.Round(fun(x), 5) + " n = " + n);
            Console.ReadKey();
        }
    }
}
