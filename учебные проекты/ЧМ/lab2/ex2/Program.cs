using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ex2
{
    class Program
    {
        static double func1(double x2)
        {
            return (Math.Sin(x2)-1)/2;
        }
        static double func2(double x1)
        {
            return Math.Cos(x1+0.5)-2;
        }
        static double fun(double x1, double x2)
        {
            return (Math.Cos(x2) + 2*x1);
        }

        static double fun2(double x1, double x2)
        {
            return Math.Sin(x1 + 1) - x2;
        }
        static void Main(string[] args)
        {
            double x01 = 0, x02 = 0; //приближенные значения
            double e = 0.001;
            double x1, x2, p, n = 0;
            do
            {
                x1 = func1(x02);
                x2 = func2(x01);
                p = Math.Abs(x1 - x01) + Math.Abs(x2 - x02);
                x01 = x1;
                x02 = x2;
                n++;
            } while (p > e);
            Console.WriteLine("x1 = " + Math.Round(x1, 4) + " x2 =" + Math.Round(x2, 4) + " n = " + n);
            Console.WriteLine("f(x) = " + fun(x1, x2) + " | ответ должен равняться ~2");
            Console.WriteLine("f(x) = " + fun2(x1, x2) + " | ответ должен равняться ~1,2");
        }
    }
}
