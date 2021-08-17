using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace integral
{
    class Program
    {
        //метод Симпсона
        static double Simpson(double a, double b, int n)
        {
            int i;
            double S = 0;
            double[] x = new double[n + 1];
            double h = (b - a) / n;
            //значение функции для равноотстоящих точек
            for (i = 0; i < n; i++)
            {
                x[i] = a + h * i;
            }
            //для подсчета h/3 * (y0+yn)
            S = h * (func(x[0]) + func(x[n])) / 3;
            //для подсчета h/3 * 4(y1+y3+...+y(n-1))
            for (i = 1; i < (n - 1); i = i + 2)
            {
                S = S + h * 4 * func(x[i]) / 3;
            }
            //для подсчета h/3 * 2(y2+y4+...+y(n-2))
            for (i = 2; i < (n - 2); i = i + 2)
            {
                S = S + h * 2 * func(x[i]) / 3;
            }
            return S;
        }
        static double func(double x)
        {
            return (Math. Sqrt(x * x + 0.6)) / (1.4 + Math. Sqrt(0.8 * Math. Pow(x, 2) + 1.3));
        }

        static void Main(string[] args)
        {
            double a = 1.3;
            double b = 2.5;
            int n = 5000;
            double h = (b - a) / n;
            double result = 0;
            for (double x = a; x < b; x += h)
            {               
                result += h * (func(x) + func(x + h)) / 2; //трапеций
            }
            double result1 = Simpson(a, b, n);
            Console.WriteLine("метод трапеций: " + result);
            Console.WriteLine("метод симпсона: " + result1);
        }
    }
}
