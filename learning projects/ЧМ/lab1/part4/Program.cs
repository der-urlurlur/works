using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace part4
{
    class Program
    {
        static double funx(double x)
        {
            return 3*(Math.Pow(x,2) + 1);
        }
        static double fun(double x)
        {
            return (x * x * x + 3 * x + 1);
        }
        static void Main(string[] args)
        {
            Console.WriteLine("Метод касательных");
            Console.WriteLine("Введите значение x");
            double x = double.Parse(Console.ReadLine());
            Console.WriteLine("Введите значение точности");
            double e = double.Parse(Console.ReadLine());
            double n = 0, p = 0, x1;            
            do
            {
                //pr = (funx(x + h) - funx(x)) / h;
                //Console.WriteLine(pr);
                x1 = x - fun(x) / funx(x);
                p = Math.Abs(x1 - x);
                x = x1;
                n++;
            } while (p > e);
            Console.WriteLine("x = " + x + " f(x) = " + fun(x) + " n = " + n);
            Console.ReadKey();
        }
    }
}
