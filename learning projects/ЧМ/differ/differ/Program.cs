using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace differ
{
    class Program
    {
        static double f(double x, double y)
        {
            return Math.Cos(x + y) + 0.5 * (x - y);
        }
        static void euler(double x0, double y0, double h, double xn)//Метод Эйлера для ОДУ
        {
            for (double i=x0+h; i<=xn; i=i+h)
            {    
                Console. WriteLine ("прих={0} , y={1}", i, (y0 + h * f(i, y0)));            
                y0 = y0 + h * f(i, y0);
                
            }
        }        
        static void runge(double x0, double y0,double h, double xn)//Метод Рунге-Кутта для ОДУ
        {
            double k0, k1, k2, k3;
            for (double i = x0 + h; i<= xn; i = i + h)
            {
                y0 = y0 + h * f(i, y0);
                k0 = f(i, y0);
                k1 = f(i + h / 2, y0 + h * k0 / 2);
                k2 = f(i + h / 2, y0 + h * k1 / 2);
                k3 = f(i + h / 2, y0 + h * k2 / 2);
                Console. WriteLine ("прих={0} , y={1}", i, (y0 + 1/6*h * (k0+2*k1+2*k2+k3)));
                
             }
        }      
        static void Main(string[] args)
        {
            double x0 = 1.6;
            double y0 = 4.6;
            double xn = 2.6;
            double h = 0.1;
            Console.WriteLine("Метод Эйлера:");
            euler(x0, y0, h, xn);
            Console.WriteLine("Метод Рунге-Кутта:");
            runge(x0, y0, h, xn);


        }
    }
}
