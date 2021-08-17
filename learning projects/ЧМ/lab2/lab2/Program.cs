using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace lab2
{
    class Program
    {
        static double func1(double x2, double x3) //выражаем x1
        {
            return (1.5*x2-2.6*x3) / 9.9;
        }

        static double func2(double x1, double x3) //выражаем x2
        {
            return (-0.7*x1-7.1*x3-1.3)/0.4;
        }

        static double func3(double x1, double x2) //выражаем x3
        {
            return (2.5*x1+5.8*x2-3.5)*2;
        }
        static double fun(double x1, double x2, double x3)
        {
            return (x1 + 3 * x2 - x3);
        }
        static double fun2(double x1, double x2, double x3)
        {
            return (2 * x1 - x2 + 3 * x3);
        }
        static double fun3(double x1, double x2, double x3)
        {
            return (5 * x1 + 2 * x2 + x3);
        }
        static void Main(string[] args)
        {
            double x01 = 5; //начальные приближения
            double x02 = 2;
            double x03 = -4;

            double e = 0.0001; //точность

            double x1 = 0, x2 = 0, x3 = 0;
            
            double n = 0;
            double p = 0; //переменная для суммы отклонений
            do
            {
                x1 = func1(x02, x03);
                x2 = func2(x01,x03);
                x3 = func3(x01,x02);
                p = Math.Abs(x1 - x01) + Math.Abs(x2 - x02) + Math.Abs(x3 - x03);
                x01 = x1;
                x02 = x2;
                x03 = x3;
                n++;
            }
            while (p > e);
            Console.WriteLine("x1 = " + Math.Round(x1, 4) + " x2 =" + Math.Round(x2, 4) + " x3 =" + Math.Round(x3, 4) + " n = " + n);
            Console.WriteLine("f(x) = " + fun(x1,x2,x3)+ " | ответ должен равняться ~2");
            Console.WriteLine("f(x) = " + fun2(x1, x2, x3) + " | ответ должен равняться ~-4");
            Console.WriteLine("f(x) = " + fun3(x1, x2, x3) + " | ответ должен равняться ~5");


        }
    }
}
